<?php

class feeds extends MY_Controller {
	function __construct()
    {
        parent::MY_Controller();
        $this->load->library('login_manager');
    }

    function index($offset = 0, $limit = 800)
    {
    	$estates = new Estate();
        $estates->where('isFree', 0);
        $estates->order_by('id', 'desc');
        $estates->get_paged($offset, $limit, TRUE);

        $xmlFile = "mitula_feed_".$offset."_".$limit.".xml";
        $xmlFile = $_SERVER['DOCUMENT_ROOT'].'/feeds/'.$xmlFile;
        
        //$f = fopen($xmlFile, 'w');

		//create the xml document
		$xmlDoc = new DOMDocument('1.0', 'UTF-8');

		$root = $xmlDoc->createElement('Mitula');
		$xmlDoc->appendChild($root);

		foreach ($estates as $row) {
			$ad = $xmlDoc->createElement('ad');
			
			// create id for ad
			$id = $xmlDoc->createElement('id');
			$id->appendChild($xmlDoc->createCDATASection($row->code));

			// create url for ad
			$url = $xmlDoc->createElement('name');
			$url->appendChild($xmlDoc->createCDATASection(base_url().$row->estatecatalogue->name_none.'/'.$row->estatecity->name_none.'/'.$row->title_none.'.html'));

			// create title for ad
			$title = $xmlDoc->createElement('title');
			$title->appendChild($xmlDoc->createCDATASection($row->title));

			// create type for ad
			$type = $xmlDoc->createElement('type');
			$type->appendChild($xmlDoc->createCDATASection($row->estatetype->name));

			// create content for ad
			$content = $xmlDoc->createElement('content');
			$content->appendChild($xmlDoc->createCDATASection($row->description));

			// create price for ad
			$price = $xmlDoc->createElement('price');

			$period = $xmlDoc->createAttribute('period');
			$period->value = 'monthly';

			$price->appendChild($period);
			$price->appendChild($xmlDoc->createCDATASection($row->price_text.' '.getpricetype($row->price_type)));

			// create floor_area for ad
			$floor_area = $xmlDoc->createElement('floor_area');
			$floor_area->appendChild($xmlDoc->createCDATASection($row->area_text.' m2'));

			// create city for ad
			$city = $xmlDoc->createElement('city');
			$city->appendChild($xmlDoc->createCDATASection($row->estatecity->name));

			// create address for ad
			$address = $xmlDoc->createElement('address');
			$address->appendChild($xmlDoc->createCDATASection($row->address));

			$photos = new Estate_photo();
        	$photos->where('estate_id', $row->id);
        	$photos->get();

			if ($row->photo != null || $photos->result_count() > 0) {
				$pictures = $xmlDoc->createElement('pictures');

				$picture = $xmlDoc->createElement('picture');

				$pictureTitle = $xmlDoc->createElement('picture_title');
				$pictureTitle->appendChild($xmlDoc->createCDATASection($row->title));

				$pictureUrl = $xmlDoc->createElement('picture_url');
				$pictureUrl->appendChild($xmlDoc->createCDATASection(image($row->photo, 'slide_580_380')));

				$picture->appendChild($pictureUrl);
				$picture->appendChild($pictureTitle);

				if ($photos->result_count() > 0) {
					foreach ($photos as $photo) {
						$rowPhoto = new Estate_photo($photo->id);

						$picture = $xmlDoc->createElement('picture');

						$pictureTitle = $xmlDoc->createElement('picture_title');
						$pictureTitle->appendChild($xmlDoc->createCDATASection($row->title));

						$pictureUrl = $xmlDoc->createElement('picture_url');
						$pictureUrl->appendChild($xmlDoc->createCDATASection(image($rowPhoto->name, 'slide_580_380')));

						$picture->appendChild($pictureUrl);
						$picture->appendChild($pictureTitle);

						$pictures->appendChild($picture);
					}
				}

				$pictures->appendChild($picture);
			}

			$ad->appendChild($id);
			$ad->appendChild($url);
			$ad->appendChild($title);
			$ad->appendChild($type);
			$ad->appendChild($content);
			$ad->appendChild($price);
			$ad->appendChild($floor_area);
			$ad->appendChild($city);
			$ad->appendChild($address);
			$ad->appendChild($pictures);

			$root->appendChild($ad);
		}
		       
		//make the output pretty
		$xmlDoc->formatOutput = true;

		// Flush XML from memory to file in one go
		$result = file_put_contents($xmlFile, $xmlDoc->saveXML()) or print_r(error_get_last());

		if ($result == false) {
		    echo "Error";
		} else {
		    echo $xmlFile." All good, $result bytes written";
		}

		die;
    }
}
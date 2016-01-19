<?php
class fprojects extends MY_Controller{
    var $menu_active = "project";
    
    function __construct(){
        parent::__construct();
        $this->load->helper('remove_vn_helper');
    }

    function index(){
        $arrayCateNewsId = array();
        foreach($this->projectsCate as $row){
            $arrayCateNewsId[] = $row->id;
        }

		// project hot
        $projectHot = new Article();
        $projectHot->where('recycle',0);
        $projectHot->where('hot',1);
        $projectHot->where_in('newscatalogue_id',$arrayCateNewsId);
        $projectHot->get(9);
        $dis['projectHot'] = $projectHot;

        // project hot
        $projectVT = new Article();
        $projectVT->where('recycle',0);
        $projectVT->where('hot !=',1);
        $projectVT->where_in('newscatalogue_id',$arrayCateNewsId);
        $projectVT->get(9);
        $dis['projectVT'] = $projectVT;

         // project viewmost
        $projectViewMost = new Article();
        $projectViewMost->where('recycle',0);
        $projectViewMost->where('hot !=',1);
        $projectViewMost->where_in('newscatalogue_id', $arrayCateNewsId);
        $projectViewMost->order_by('view_count', 'desc');
        $projectViewMost->get(9);
        $dis['projectViewMost'] = $projectViewMost;

        // Seo
        $category = new Newscatalogue(83);
        $this->page_title = $category->title_bar;
        $this->page_description = $category->slogan;
        $this->page_keyword = $category->keyword;
        
		// To View
		$this->isRobotFollow = 1;
        $dis['base_url']=base_url();
        $dis['view']='front/project/news';
        $this->viewfront($dis) ;

    }

    function cat($cat = NULL, $offset = 0, $limit = 12 ){
        if(empty($offset))
            $offset = $this->uri->segment(3);


        $cat = $this->uri->segment(2);
        $category = new Newscatalogue();
        $category->where(array('name_none' => $cat))->get();
        if(!$category->exists()){
            show_404();
        }
        $dis['category'] = $category;

        //category news
        $cat_news = new Article();
        $cat_news->where(array('recycle'=>0));
        $cat_news->where('newscatalogue_id', $category->id);
        $cat_news->order_by('created','desc');
        $cat_news->get_paged($offset,$limit,TRUE);
        $dis['news'] = $cat_news;
        setPaginationVb('du-an/'.$cat,$cat_news->paged->total_rows,$limit,3);

        // get news view most
        $newViewMost = new Article();
        $newViewMost->where('recycle',0);
        $newViewMost->where_in('newscatalogue_id', $category->id);
        $newViewMost->order_by('view_count', 'desc');
        $newViewMost->get(5);
        $dis['newViewMost'] = $newViewMost;

        //seo
        $this->page_title = $category->title_bar;
        $this->page_description = $category->slogan;
        $this->page_keyword = $category->keyword;

		$this->isRobotFollow = 1;
        $dis['base_url']=base_url();
        $dis['view']='front/project/news_cat';
        $this->viewfront($dis) ;
    }

	function detail($title_none = NULL){
        $cat_news_url = $this->uri->segment(1);
        $cat_news = new Newscatalogue();
        $cat_news->where(array('name_none' => $cat_news_url, 'parentcat_id'=> NULL))->get();
        if(!$cat_news->exists()){
            show_404();
        }
        $dis['cat_news'] = $cat_news;

        $cat = $this->uri->segment(2);
        $category = new Newscatalogue();
        $category->where(array('name_none' => $cat, 'parentcat_id' => $cat_news->id))->get();
        if(!$category->exists()){
            show_404();
        }
        $dis['category'] = $category;

        $title_none = geturlfromuri($this->uri->segment(3));
        $news = new Article();
        $news->where(array('title_none'=>$title_none, 'newscatalogue_id'=>$category->id));
        $news->get();
        if(!$news->exists())
            show_404();
        $dis['news'] = $news;

        $tag = $news->tag;
        $dis['tag'] = explode(',', $tag);

        $news->view_count = $news->view_count ++;
        $news->save();

        //related news
        $related_news = new Article();
        $related_news->where('recycle',0);
        $related_news->where('newscatalogue_id',$news->newscatalogue_id);
        $related_news->where("id !=",$news->id);
        $related_news->order_by('created', 'DESC');
        $related_news->get_paged(0, 10, TRUE);
        $dis['related_news'] = $related_news;

        $this->page_title = $news->{'title_vietnamese'}.' | Dự án '.$category->name_vietnamese.' '.$news->{'title_vietnamese'}.' | SotayNhadat.vn';
        $this->page_description = $news->short_vietnamese;
        $this->page_keyword = $news->tag;

        $this->uri = base_url().substr($this->uri->uri_string, 1, strlen($this->uri->uri_string));
		$this->isRobotFollow = 1;
        $dis['base_url']=base_url();
        $dis['view']='front/project/news_de';
        $this->viewfront($dis) ;
    }

    function searchProject(){

        $estatesType = $this->input->post('estatetype_id');
        $estatesCity = $this->input->post('estatecity_id');
        $estatesDictrict = $this->input->post('estatedistrict_id');

        $estates = new Article();
        $estates->where('recycle',0);
        $estates->where('newscatalogue_id',$estatesType);
        /*if($this->input->post('estatetype_id') != ''){
            $estates->where('estatetype_id', $estatesType);
        }*/
        if($this->input->post('estatecity_id') != ''){
            $estates->where('estatecity_id', $estatesCity);
        }
        if($this->input->post('estatedistrict_id') != ''){
            $estates->where('estatedistrict_id', $estatesDictrict);
        }
        $estates->get_iterated();
        $dis['estates'] = $estates;

        $this->page_title = 'Tìm kiếm dự án - '.$this->page_title;
        $this->page_description = 'Tìm kiếm dự án - '.$this->page_description;
        $this->page_keyword = 'Tìm kiếm dự án - '.$this->page_keyword;

		$this->isRobotFollow = 1;
        $dis['base_url']=base_url();
        $dis['view']='front/project/search';
        $this->viewfront($dis) ;
    }
}
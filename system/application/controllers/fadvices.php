<?php
class fadvices extends MY_Controller{
    var $menu_active = "advices";

    function __construct()
    {
        parent::__construct();

    }
    function index($offset=0, $limit=10)
    {
        // offset
        if(!empty($offset)){
            $offset = $this->uri->segment(3);
        }

        // news
        $news = new Article();
        $news->where('recycle',0);
        $news->where('newscatalogue_id',67);
        $news->order_by('created', 'DESC');
        $news->get_paged($offset,$limit,TRUE);
        setPaginationVb($this->lang->lang().'/advices/',$news->paged->total_rows, $limit, 3);
        $dis['news'] = $news;

        

        // seo
        $this->page_title = "Tư vấn";

        $dis['base_url']=base_url();
        $dis['view']='front/advices/news';
        $this->viewfront($dis) ;

    }

    function detail($title_none = NULL){
        $title_none = $this->uri->segment(3);
        $arrTitle = explode('.', $title_none);
        if($arrTitle[1] == '' || $arrTitle[1] != 'html'){
            redirect('');
        }
        $title_none = $arrTitle[0];

        $news = new Article();
        $news->where('title_none',$title_none);
        $news->get();
        if(!$news->exists())
            show_404();
        $dis['news'] = $news;

        //related news
        $related_news = new Article();
        $related_news->where('recycle',0);
        $related_news->where('newscatalogue_id',$news->newscatalogue_id);
        $related_news->where("id !=",$news->id);
        $related_news->order_by('created', 'DESC');
        $related_news->get_paged(0, 10, TRUE);
        $dis['related_news'] = $related_news;


        $category = new Newscatalogue($news->newscatalogue_id);
        $dis['category'] = $category;



        $this->page_title = $news->{'title_vietnamese'};
        $this->page_description = $news->short_vietnamese;
        $this->page_keyword = $news->tag;

        $dis['base_url']=base_url();
        $dis['link'] = base_url().$_SERVER['REQUEST_URI'];
        $dis['view']='front/advices/news_de';
        $this->viewfront($dis) ;
    }
}
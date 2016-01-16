<?php
class fservices extends MY_Controller{
    var $menu_active = "services";
    
    function __construct()
    {
        parent::__construct();
       
    }
    function index($offset=0, $limit=10)
    {
		if(empty($offset))
            $offset = $this->uri->segment(2);

        // get news new
        $newNews = new Article();
        $newNews->where('recycle',0);
        $newNews->where('newscatalogue_id', 90);
        $newNews->order_by('created', 'desc');
        $newNews->get_paged($offset, $limit,TRUE);
        $dis['news'] = $newNews;
        setPaginationVb('dich-vu/', $newNews->paged->total_rows, $limit, 2);

        //seo
        $category = new Newscatalogue(90);
        $dis['category'] = $category;

        $this->page_title = $category->title_bar;
        $this->page_description = $category->slogan;
        $this->page_keyword = $category->keyword;
        
        $dis['base_url']=base_url();
        $dis['view']='front/services/news';
        $this->viewfront($dis) ;
		
    }
	
	function detail($title_none = NULL){
        $cat = $this->uri->segment(1);
        $category = new Newscatalogue();
        $category->where(array('name_none' => $cat))->get();
        if(!$category->exists()){
            show_404();
        }
        $dis['category'] = $category;

        $title_none = geturlfromuri($this->uri->segment(2));
        $news = new Article();
        $news->where(array('title_none'=>$title_none, 'newscatalogue_id'=>$category->id));
        $news->get();
        if (!$news->exists()){
            redirect( base_url().$this->uri->segment(1, '').'/'.$this->uri->segment(2, '') );
            die;
        }
        $dis['news'] = $news;

        $tag = $news->tag;
        $dis['tag'] = explode(',', $tag);

        $news->view_count = $news->view_count+1;
        $news->save();

        //related news
        $related_news = new Article();
        $related_news->where('recycle',0);
        $related_news->where('newscatalogue_id', $news->newscatalogue_id);
        $related_news->where("id !=",$news->id);
        $related_news->order_by('created', 'DESC');
        $related_news->get_paged(0, 10, TRUE);
        $dis['related_news'] = $related_news;

        $this->page_title = $news->{'title_vietnamese'};
        $this->page_description = $news->short_vietnamese;
        $this->page_keyword = $news->tag;

        $dis['base_url']=base_url();
        $dis['link'] = base_url().$_SERVER['REQUEST_URI'];
        $dis['view']='front/services/news_de';
        $this->viewfront($dis) ;
    }
}
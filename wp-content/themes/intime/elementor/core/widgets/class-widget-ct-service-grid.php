<?php

class CT_CtServiceGrid_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_service_grid';
    protected $title = 'Service Grid';
    protected $icon = 'eicon-posts-justified';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"style_layout1","label":"Layout Styles","type":"select","options":{"style1":"Style 1","style2":"Style 2"},"default":"style1","condition":{"layout":["1"]}},{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"https:\/\/papeindo.org\/wp-content\/themes\/intime\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout1.jpg"},"2":{"label":"Layout 2","image":"https:\/\/papeindo.org\/wp-content\/themes\/intime\/elementor\/templates\/widgets\/ct_service_grid\/layout-image\/layout2.jpg"}}}]},{"name":"source_section","label":"Source","tab":"content","controls":[{"name":"source","label":"Select Categories","type":"select2","multiple":true,"options":{"business|service-category":"Business","solutions|service-category":"Solutions"}},{"name":"orderby","label":"Order By","type":"select","default":"date","options":{"date":"Date","ID":"ID","author":"Author","title":"Title","rand":"Random"}},{"name":"order","label":"Sort Order","type":"select","default":"desc","options":{"desc":"Descending","asc":"Ascending"}},{"name":"limit","label":"Total items","type":"number","default":"8"}]},{"name":"grid_section","label":"Grid","tab":"content","controls":[{"name":"img_size","label":"Image Size","type":"text","description":"Enter image size (Example: \"thumbnail\", \"medium\", \"large\", \"full\" or other sizes defined by theme). Alternatively enter size in pixels (Default: 370x300 (Width x Height)).","condition":{"layout":"2"}},{"name":"filter","label":"Filter on Masonry","type":"select","default":"false","options":{"true":"Enable","false":"Disable"}},{"name":"filter_default_title","label":"Filter Default Title","type":"text","default":"All","condition":{"filter":"true"}},{"name":"filter_alignment","label":"Filter Alignment","type":"select","default":"center","options":{"center":"Center","left":"Left","right":"Right"},"condition":{"filter":"true"}},{"name":"pagination_type","label":"Pagination Type","type":"select","default":"false","options":{"pagination":"Pagination","loadmore":"Loadmore","false":"Disable"}},{"name":"col_xs","label":"Columns XS Devices","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_sm","label":"Columns SM Devices","type":"select","default":"2","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_md","label":"Columns MD Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_lg","label":"Columns LG Devices","type":"select","default":"4","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_xl","label":"Columns XL Devices","type":"select","default":"4","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""}]},{"name":"display_section","label":"Display Options","tab":"content","controls":[{"name":"show_title","label":"Show Title","type":"switcher","default":"true"},{"name":"show_excerpt","label":"Show Excerpt","type":"switcher","default":"true"},{"name":"num_words","label":"Number of Words","type":"number","default":25,"condition":{"show_excerpt":"true"},"separator":"after"},{"name":"show_button","label":"Show Button Readmore","type":"switcher","default":"true","condition":{"layout":["1","2"]}},{"name":"button_text","label":"Button Text","type":"text","condition":{"show_button":"true","layout":["1","2"]}}]},{"name":"style_section","label":"Style","tab":"content","controls":[{"name":"title_color","label":"Title Color","type":"color","selectors":{"{{WRAPPER}} .ct-grid .item--title":"color: {{VALUE}};"}},{"name":"title_typography","label":"Title Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-grid .item--title"},{"name":"content_color","label":"Content Color","type":"color","selectors":{"{{WRAPPER}} .ct-grid .item--content":"color: {{VALUE}};"}},{"name":"content_typography","label":"Content Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-grid .item--content"},{"name":"box_color","label":"Box Background Color","type":"color","selectors":{"{{WRAPPER}} .ct-service-grid1 .item--holder":"background-color: {{VALUE}};"},"condition":{"layout":"1"}},{"name":"box_overlay_color","label":"Box Overlay Color","type":"color","selectors":{"{{WRAPPER}} .ct-service-grid1 .item--holder-hover::before":"background-color: {{VALUE}};"},"condition":{"layout":"1"}}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'imagesloaded','isotope','ct-post-masonry-widget-js','ct-post-grid-widget-js' );
}
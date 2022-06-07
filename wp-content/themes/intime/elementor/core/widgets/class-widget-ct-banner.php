<?php

class CT_CtBanner_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_banner';
    protected $title = 'Banner';
    protected $icon = 'eicon-posts-ticker';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"https:\/\/papeindo.org\/wp-content\/themes\/intime\/elementor\/templates\/widgets\/ct_banner\/layout-image\/layout1.jpg"},"2":{"label":"Layout 2","image":"https:\/\/papeindo.org\/wp-content\/themes\/intime\/elementor\/templates\/widgets\/ct_banner\/layout-image\/layout2.jpg"},"3":{"label":"Layout 3","image":"https:\/\/papeindo.org\/wp-content\/themes\/intime\/elementor\/templates\/widgets\/ct_banner\/layout-image\/layout3.jpg"},"4":{"label":"Layout 4","image":"https:\/\/papeindo.org\/wp-content\/themes\/intime\/elementor\/templates\/widgets\/ct_banner\/layout-image\/layout4.jpg"}}}]},{"name":"section_content","label":"Content","tab":"content","controls":[{"name":"banner_image","label":"Image","type":"media"},{"name":"banner_sub_title","label":"Sub Title","type":"text","condition":{"layout":["3"]}},{"name":"banner_title","label":"Title","type":"text","condition":{"layout":["1","2","3"]}},{"name":"banner_number","label":"Number","type":"text","condition":{"layout":["1","2"]}},{"name":"banner_number_suffix","label":"Number Suffix","type":"text","condition":{"layout":"1"}},{"name":"banner_label","label":"Number Label","type":"text","condition":{"layout":"2"}},{"name":"banner_description","label":"Description","type":"textarea","placeholder":"Enter your description","rows":10,"show_label":false,"condition":{"layout":["2","3"]}},{"name":"icon_type","label":"Icon Type","type":"select","options":{"icon":"Icon","image":"Image"},"default":"icon","condition":{"layout":"2"}},{"name":"selected_icon","label":"Icon","type":"icons","fa4compatibility":"icon","condition":{"icon_type":"icon","layout":"2"}},{"name":"icon_image","label":"Icon Image","type":"media","description":"Select image icon.","condition":{"icon_type":"image","layout":"2"}},{"name":"sub_title_typography","label":"Sub Title Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-banner3 .ct-banner-sub-title","condition":{"layout":"3"}},{"name":"sub_title_desc","label":"Description Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-banner3 .ct-banner-desc","condition":{"layout":"3"}},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'elementor-waypoints','jquery-numerator','ct-counter-widget-js' );
}
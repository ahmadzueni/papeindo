<?php

class CT_CtTabs_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_tabs';
    protected $title = 'Tabs';
    protected $icon = 'eicon-tabs';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"section_tabs","label":"Tabs","tab":"content","controls":[{"name":"active_tab","label":"Active Tab","type":"number","default":1,"separator":"after"},{"name":"tabs","label":"Tabs Items","type":"repeater","controls":[{"name":"ct_icon","label":"Icon","type":"icons","fa4compatibility":"icon"},{"name":"tab_title","label":"Title","type":"text","default":"Tab Title","placeholder":"Tab Title","label_block":true},{"name":"content_type","label":"Content Type","type":"select","default":"text_editor","options":{"text_editor":"Text Editor","template":"Template"}},{"name":"tab_content","label":"Content","type":"wysiwyg","default":"Tab Content","placeholder":"Tab Content","show_label":false,"condition":{"content_type":"text_editor"}},{"name":"tab_content_template","label":"Template","type":"select","default":"","options":{"":"Select Template","6441":"Default Kit","6344":"Home 7","5086":"Widget Tab 2","5080":"Widget Tab 1","4462":"Footer 1","502":"Heading Center","472":"Heading Inner","222":"Heading","12":"Default Kit"},"condition":{"content_type":"template"}},{"name":"form_id","label":"Select Contact Form 7","type":"select","options":{"3392":"Contact Home 4","626":"Main Contact Form"},"condition":{"content_type":"form"}}],"title_field":"{{{ tab_title }}}"},{"name":"tab_type","label":"Type","type":"select","options":{"horizontal":"Horizontal"},"default":"horizontal"},{"name":"tab_style","label":"Style","type":"select","options":{"style1":"Style 1"},"default":"style1","condition":{"tab_type":"horizontal"}},{"name":"title_color","label":"Title Color","type":"color","selectors":{"{{WRAPPER}} .ct-tabs .ct-tabs-title .ct-tab-title":"color: {{VALUE}};"}},{"name":"title_active_color","label":"Title Active Color","type":"color","selectors":{"{{WRAPPER}} .ct-tabs .ct-tabs-title .ct-tab-title.active":"color: {{VALUE}};"}},{"name":"content_color","label":"Content Color","type":"color","selectors":{"{{WRAPPER}} .ct-tabs .ct-tabs-content .ct-tab-content":"color: {{VALUE}};"}}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'ct-tabs-widget-js' );
}
<?php defined('SYSPATH') or die('No direct access allowed.');

    Event::add('freeswitch.reload.xml', array('EslManager', 'eventReloadXML'));

    Event::add('freeswitch.reload.acl', array('EslManager', 'eventReloadACL'));

    Event::add('freeswitch.reload.xmlcdr', array('EslManager', 'eventReloadXMLCDR'));

    Event::add('freeswitch.reload.sofia', array('EslManager', 'eventReloadSofia'));

    Event::add('freeswitch.reload.dingaling', array('EslManager', 'eventReloadDingaling'));

    Event::add('freeswitch.rescan.sofia', array('EslManager', 'eventRescanSofia'));

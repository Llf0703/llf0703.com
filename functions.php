<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text('faviconUrl', NULL, NULL, _t('站点favicon.ico地址'), _t('站点favicon.ico地址'));
    $form->addInput($faviconUrl);

    $backgroundImage = new Typecho_Widget_Helper_Form_Element_Text('backgroundImage', NULL, NULL, _t('背景图片地址'), _t('请输入背景图片地址'));
    $form->addInput($backgroundImage);

    $backgroundText = new Typecho_Widget_Helper_Form_Element_Text('backgroundText', NULL, NULL, _t('背景图片大标题'), _t('请输入背景图片大标题内容'));
    $form->addInput($backgroundText);
}
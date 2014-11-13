<?php
/**file: init.inc.phpSmarty�����ʵ��������ʹ���ļ�  */
 
define("ROOT",str_replace("\\", "/",dirname(__FILE__)).'/');  //ָ����Ŀ�ĸ�·��
require ROOT.'libs/Smarty.class.php';    //����Smarty���ļ�
 
$tpl= new Smarty();  //ʵ����Smarty��Ķ���$smarty
 
/* �Ƽ���Smarty3���ϰ汾��ʽ����Ĭ��·��,�ɹ��󷵻�$smarty��������������� */
$tpl->setTemplateDir(ROOT.'templates/')  //��������ģ���ļ���ŵ�Ŀ¼
        // ->addTemplateDir(ROOT.'templates2/')     //������Ӷ��ģ��Ŀ¼��ǰ��̨��һ����
    ->setCompileDir(ROOT.'templates_c/')    //�������б������ģ���ļ���ŵ�Ŀ¼
    ->setPluginsDir(ROOT.'plugins/')     //����Ϊģ����������ŵ�Ŀ¼
    ->setCacheDir(ROOT.'cache/')        //���û����ļ���ŵ�Ŀ¼
    ->setConfigDir(ROOT.'configs');     //����ģ�������ļ���ŵ�Ŀ¼
 
$tpl->auto_literal = false;            //�Ϳ����ö������ʹ�ÿո�
$tpl->caching = false;                   //����Smarty���濪�ع���
$tpl->cache_lifetime = 60*60*24;         //����ģ�建����Чʱ��εĳ���Ϊ1��
$tpl->left_delimiter = '<{';           //����ģ�������е��������
$tpl->right_delimiter = '}>';         //����ģ�������е��ҽ�����
?>

<?php
return array(
	// 来自SAE版ThinkPHP的配置项
	'SHOW_PAGE_TRACE'=>true,
    'URL_HTML_SUFFIX'=>'.html',

	// 设置分组目录结构
	"APP_GROUP_LIST" => "Index,Admin,Gutoutiao,Jianguji",
	"DEFAULT_GROUP" => "Gutoutiao",
	// 设置文件链接符，减少Tpl路径深度，用起来容易出问题，考虑少用。
	// "TMPL_FILE_DEPR" => '_',
	// 设置错误文件, 该文件不能被模板引擎处理。
	// "TMPL_EXCEPTION_FILE" => './Public/Tpl/error.html',
);
?>
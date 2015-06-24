function resetWindow(){
	dHeight = window.screen.height;
	wHeight = window.document.height;
	innerHeight = window.innerHeight;
	$(".box").css("height", ""+innerHeight);
	$("#main_wrapper").css("height", ""+innerHeight);
};

function getUrl(base, media, name, relative_path)
{
	relative_path = "application/views/";
	return base + relative_path + media + "/" + name;
}

function getPageUrl(base, media, name, relative_path)
{
	relative_path = "";
	return base + relative_path + media + "/" + name;
}

function setArchurs(){
	var arch_pre = "index.php";

	var news_classify_url = getPageUrl(base_url, arch_pre, "welcome/news/");
	$("#news_classify")[0].setAttribute("href", news_classify_url);
	var actors_info_url = getPageUrl(base_url, arch_pre, "welcome/actors/");
	$("#actors_info")[0].setAttribute("href", actors_info_url);
	var home_page_url = getPageUrl(base_url, arch_pre, "welcome/index/");
	$("#home_page")[0].setAttribute("href", home_page_url);

	if($("#actor_info")[0])
	{
		var actor_info_url = getPageUrl(base_url, arch_pre, "welcome/actor_info/");
		$("#actor_info")[0].setAttribute("href", actor_info_url);
	}
}


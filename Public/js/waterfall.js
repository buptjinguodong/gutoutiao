/**
 * 找到数组pinArr中值为minH的元素位置
 * @param  {[array]} pinArr [description]
 * @param  {[int]} minH   [description]
 * @return {[int]}        [index]
 */
function getMinHIndex(pinArr, minH){
	for(var i=0; i<pinArr.length; i++){
		if(minH == pinArr[i]){
			return i;
		}
	}
}
/**
 * 判断窗口滚动监听事件是否达到加载更多的要求
 * @return {[type]} [description]
 */
function checkscrollside(){
	var main = document.getElementById("main");
	var pins = document.getElementsByClassName("pin");
	// 创建【触发添加块框函数waterfall()】的高度：最后一个块框的距离网页顶部+自身高的一半(实现未滚到底就开始加载)
	var lastPinH = pins[pins.length - 1].offsetTop + Math.floor(pins[pins.length - 1].offsetHeight/2);
	//注意解决兼容性
	var scrollTop = document.documentElement.scrollTop||document.body.scrollTop;
	//窗口高度
	var documentH = document.documentElement.clientHeight;
	//到达指定高度后 返回true，触发waterfall()函数
	return (lastPinH<scrollTop+documentH)?true:false;
}
/**
 * 创建数组pinHArr-用于存储每一列高度；
 * for语句遍历每个块框aPin[i]，将前num个块框赋值给数组pinHArr，对超出一行能容纳的块框数num的块框绝对定位。
 * @param  {[type]} parent [description]
 * @param  {[type]} pin    [description]
 * @return {[type]}        [description]
 */
function waterfall(parent,pin){
	var main = document.getElementById(parent);
	var pins = main.getElementsByClassName(pin);
	var num = Math.floor(document.documentElement.clientWidth/pins[0].offsetWidth);
	main.style.cssText = 'width:'+pins[0].offsetWidth*num+'px;margin:0 auto;';

	// 用于存储 每列中的所有块框相加的高度【随着列数的不同此数组的length也随之改变】
	var pinArr = [];
	for(var i=0; i<pins.length; i++){
		var pinH = pins[i].offsetHeight; //获取数组aPin的第i个块框的可见宽offsetHeight
		if(i < num){
			pinArr[i] = pinH;
		}else{
			var minH = Math.min.apply(null, pinArr);
			var minHIndex = getMinHIndex(pinArr, minH);
			pins[i].style.position = 'absolute'; //设置绝对位移
			pins[i].style.top = minH+'px';
			pins[i].style.left = pins[minHIndex].offsetLeft+'px';
			pinArr[minHIndex] += pins[i].offsetHeight; //更新添加块框后的列高
		}
	}
};


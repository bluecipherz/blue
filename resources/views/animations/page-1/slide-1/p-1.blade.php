<style>

#p1-s1-p1{
	display:block;
	float:left;
	
	width:100%;
	height:100%;
		
	overflow:hidden;
}

#p1-s1-p1 .h{
	width:100%;
	background:#e67e22;
	height:20%;
}

#p1-s1-p1 > .cont {
	display:inline_block;
	float:left;
	width:80%;
	margin:1% 10% 0% 10%;
	height:100%;
}


#p1-s1-p1 > .cont > .box1{
	display:inline_block;
	float:left;
	width:23%;
	margin:1%;
	background:#95a5a6;
	height:40%;
	transition:background .4s;
}

#p1-s1-p1 > .cont > .box2{
	display:inline_block;
	float:left;
	width:100%;
	margin:3% 0px 0px 0px;
	background:#95a5a6;
	height:40%;
}


#p1-s1-p1 > .cont > .colorMe{
	background : #3498db;
}

#p1-s1-p1 > .m1{
	position:absolute;
	background:#535353;
	width:10px;
	height:10px;
	top:100px;
	left:10px;
	border-radius:50%;
}
</style>
<div id="p1-s1-p1">
	<div class="m1"></div>
	<div class="h">	</div>
	<div class="cont">
		<span class="box1">	</span>
		<span class="box1">	</span>
		<span class="box1">	</span>
		<span class="box1">	</span>
		
		<div class="box2"></div>
	</div> 
</div>
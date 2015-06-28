<style>

#p1-s1-p2{
	display:block;
	float:left;
	
	width:100%;
	height:100%;
		
}

#p1-s1-p2 .h{
	width:100%;
	background:#e67e22;
	height:20%;
}

#p1-s1-p2 > .cont {
	display:inline_block;
	float:left;
	width:80%;
	margin:1% 10% 0% 10%;
	height:100%;
}


#p1-s1-p2 > .cont > .box1{
	display:inline_block;
	float:left;
	width:46%;
	margin:2%;
	background:#95a5a6;
	height:40%;
	transition:background .4s;
}

#p1-s1-p2 > .cont > .box2{
	display: block;
	float:left;
	width:100%;
	margin:3% 0px 0px 0px;
	background:#3498db;
	height:40%;
}


.m2{
	position:absolute;
	background:#535353;
	width:10px;
	height:10px;
	top:100px;
	left:10px;
	border-radius:50%;
}

#p1-s1-p2-d{
	opacity:0;
	position:absolute;
	top:20px;
	left:0px;
	width:110px;
	height:90px;
	transform:rotate(90deg);
	overflow:hidden;
}
</style>
	<div class="m2" ></div>	
<div id="p1-s1-p2">
	
	<div class="h">	</div>
	<div class="cont">
		<span class="box1">	</span>
		<span class="box1">	</span>
		<span class="box1">	</span>
		<span class="box1">	</span>
		
		<div class="box2"></div>
		
		<span class="box1">	</span>
		<span class="box1">	</span>
	</div> 
</div>
<div id="p1-s1-p2-d">
	@include('animations.page-1.slide-1.p-2-2')
</div>
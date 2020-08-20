<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
@include('pages/head')
<body> 
	<!--header-->
	<div class="header">
		@include('pages/header')
	</div>
	<!---->
	<div class="container">
		@include('pages/slide')
	</div>
	           
	   		      <!---->
	 <div class="shoes-grid-left">
	 	@include('pages/grid1')
	 </div>
	 
	 @yield('product')


	   		     <div class="clearfix"> </div>
	   		   </div>   
			   <div class="sub-cate">
			   	@include('pages.sub-cate')
			   </div>
	   		    <div class="clearfix"> </div>        	         
		</div>
	
	<!---->
	<div class="footer">
		@include('pages.footer')
	</div>
</body>
</html>
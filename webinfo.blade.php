<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="{{Asset('assets/icon/tinbatdongsan_logo.ico')}}">
		<title>
			@yield('title')
		</title>
		@include('template.css')
		@yield('css')
		@include('template.js')
		@yield('link-js')
		 
	</head>
	<body>
		<header>

			@include('template.head')
		</header>
    
		<div class="container">
            <div class="row">
        		<div class="well">
                    <form>
                    	<h3>Lời Giới Thiệu</h3>
                        <div>Công ty Cổ phần Bất động sản FULAND là đơn vị hoạt động trong lĩnh vực kinh doanh, tư vấn, quản lý và tiếp thị bất động sản. </div>
                        <div>Chúng tôi tự hào là đơn vị hàng đầu cung cấp các dịch vụ bất động sản tại Việt Nam.</div>
                        <div>Chúng tôi có một đội ngũ chuyên viên tư vấn bất động sản có trình độ chuyên môn cao, giàu kinh nghiệm và luôn lấy chữ tín làm trọng.</div>
                        <div> Các khách hàng đến với chúng tôi, từ những người chưa có kinh nghiệm gì về giao dịch bất động sản đến những nhà đầu tư lão luyện đều rất hài lòng với phong cách làm việc chuyên nghiệp, hiệu quả, tận tâm và rất có trách nhiệm của FULAND.</div>
                        <div>Chúng tôi hiểu rằng sự hài lòng của khách hàng chính là yếu tố quan trọng nhất mang lại thành công cho chúng tôi nên khẩu hiệu của chúng tôi là: "Luôn nỗ lực để phục vụ khách hàng tốt hơn!"</div>
						<div><h4>Các dịch vụ của chúng tôi bao gồm:</h4></div>
						<div>-   Dịch vụ môi giới mua - bán, thuê - cho thuê bất động sản</div>
						<div>-   Dịch vụ quản lý, tiếp thị các dự án bất động sản</div>
						<div>-   Dịch vụ quảng cáo, rao bán, cho thuê bất động sản</div>
						<div>-   Dịch vụ tư vấn đầu tư, kinh doanh bất động sản</div>
						<div>-   Dịch vụ tư vấn pháp lý liên quan đến bất động sản</div>
						<div>-   Làm các thủ tục trọn gói về giao dịch bất động sản</div>
						<div>Nếu quý vị đang có nhu cầu về bất động sản, hãy đến với chúng tôi để tiết kiệm tối đa thời gian, chi phí và có được phương án tối ưu nhất!</div>
					
					
					
					

                       
                       
                        <div class="mobile">
                            <a class="btn-phone" href="#">
                            <i class="glyphicon glyphicon-earphone"> <span class="span-mobile">Liên Hệ:0938.569.939</span></i>
                            </a>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
<!--End .container-->
	<footer class="footer">
     @include('template.footer')
	</footer><!--end .footer-->
	
</body>
</html>
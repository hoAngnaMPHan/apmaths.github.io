---
layout: post
categories: [Calculus]
tags: [phương trình, vi phân]
title: "PHƯƠNG TRÌNH VI PHÂN TÁCH BIẾN"
date: 2023-12-20
---

<h1>
PHƯƠNG TRÌNH VI PHÂN TÁCH BIẾN
</h1>


<hr>
<h1>PHƯƠNG TRÌNH VI PHÂN TÁCH BIẾN</h1>




<hr>

<h2>1. DẠNG</h2>

  <p><code>Phương trình vi phân tách biến</code> (hay còn có thể goi là <code>biến phân li</code>) là phương trình vi phân có dạng
$$M(x)dx+N(y)dy=0 \quad (1)$$</p>
  <p>hay $$M(x)N(y)dx+P(x)Q(y)dy=0 \quad (2)$$</p>
  <p>hay $$y'=f(x)g(y) \quad (3)$$</p>
<!--more-->

<p>Nhìn thì có vẻ khác nhau nhưng thực chất chỉ là một. Một cách hình thức ta có thể xem $y'=\dfrac{dy}{dx}$ và một vài phép biến đổi ta có thể chuyển qua lại giữa các dạng nói trên.</p>
<p>Có thể nói tóm gọn lại một câu là phương trình vi phân tách biến thì có dạng <code>hàm nhân</code> (tức là tích của hai hàm biến $x,y$ rời nhau).</p>
<p>Biến đổi một chút ở 3 dạng trên để dễ hình dung hơn.</p>
<p>$$(1)\Leftrightarrow y'=\frac{dy}{dx}=-M(x)\times \frac{1}{N(y)} \quad \text{có dạng hàm nhân}$$</p>
<p>$$(2)\Leftrightarrow y'=\frac{dy}{dx}=-\frac{M(x)}{P(x)}\times \frac{N(y)}{Q(y)} \quad \text{có dạng hàm nhân}$$</p>
<p>$$(3)\Leftrightarrow y'=\frac{dy}{dx}=f(x)\times g(y) \quad \text{có dạng hàm nhân}$$</p>
<p>Khi hiểu và hình dung được thì ghi nhớ cái này sẽ hay hơn (mới học thì có thể không quan tâm cũng được)</p>
<p>phương trình vi phân tách biến (biến phân ly) là phương trình vi phân có dạng:</p>
<p>$$M(x,y)dx+N(x,y)dy=0$$</p>
<p>Trong đó các hàm $M(x,y), N(x,y)$ có dạng hàm nhân. Dễ dàng thấy 3 trường hợp trên đều nằm trong này hết. Trong bài tập thì nhìn vào phương trình vi phân ta sẽ dễ thấy 1 trong 3 dạng trên hơn.</p>



<hr>

<h2>2. PHƯƠNG PHÁP GIẢI</h2>
<p>Cách giải phương trình vi phân dạng này rất dễ, vì hai biến $x,y$ là độc lập với nhau nên ta đưa $x$ về một vế, $y$ về một vế rồi ta lấy tích phân hai vế là xong.</p>
<p>Ở đây ta chỉ bàn về hướng giải quyết, còn việc trong quá trình giải đôi khi ta chia cho một hàm nào đó thì dĩ nhiên ta phải xét hàm đó khác không rồi. Bằng không sao mà chia được @@.</p>
<p>Cụ thể:</p>
<p>$$(1) \Leftrightarrow M(x)dx=-N(y)dy \Rightarrow \int{M(x)dx}= -\int{N(y)dx}$$</p>
<p>$$(2) \Leftrightarrow \frac{M(x)}{P(x)}dx=-\frac{Q(y)}{N(y)}dy \Rightarrow \int{\frac{M(x)}{P(x)}dx}=- \int{\frac{Q(y)}{N(y)}dy}$$</p>
<p>$$(3) \Leftrightarrow f(x)dx=\frac{1}{g(y)}dy \Rightarrow \int{f(x)dx}=\int{\frac{1}{g(y)}dy}$$</p>


<hr>

<h2>3. Ví dụ.</h2>
<p>Nhìn trên thì có vẻ rườm rà, nhưng thử bài ví dụ xem, thấy dễ ngay và liền :)</p>


  <p><b>Ví dụ 1.</b> Giải phương trình: $$x(y^2-1)dx+y(x^2-1)dy=0\quad (1)$$</p>


<p>Thật không có gì phải bàn để kết luận đây là phương trình vi phân tách biến. Tuy nhiên ta vẫn phân tích một chút. Sẽ là thừa với một số người, nhưng sẽ là cực kỳ dễ hiểu với một số người khác. Caolac nằm trong tốp thứ 2 kakaka...</p>
<p>$M(x,y)=x(y^2-1)$ có dạng hàm nhân.</p>
<p>$N(x,y)=y(x^2-1)$ cũng có dạng hàm nhân.</p>
<p>Theo như phương pháp giải ở trên thì ta cứ quăng hết thằng $x$ về một vế, quăng hết thằng $y$ về một vế và sau đó lấy tích phân.</p>
<p>Với $x^2-1\ne 0, y^2-1 \ne 0$ ta có:</p>
<p>$$(1)\Leftrightarrow \frac{xdx}{x^2-1}=-\frac{ydy}{y^2-1} \Leftrightarrow \int{\frac{xdx}{x^2-1}}=-\int{\frac{ydy}{y^2-1}}\Leftrightarrow \frac{1}{2}\int{\frac{d(x^2-1)}{x^2-1}}=-\frac{1}{2}\int{\frac{d(y^2-1)}{y^2-1}}$$</p>
<p>$$\Leftrightarrow \ln|x^2-1|=-\ln|y^2-1|+\ln C \Leftrightarrow (x^2-1)(y^2-1)=C^2$$</p>
<p>Vậy nghiệm của phương trình đã cho là: $(x^2-1)(y^2-1)=C^2$</p>
<p><b>Nhận xét.</b> Việc giải phương trình vi phân tách biến hay còn gọi là biến phân ly này thực chất chỉ là tính tích phân. Do vậy cần phải nắm vững cách tính tích phân của một số hàm, lớp hàm đặc biệt. Khi đó thì tốc độ làm của chúng ta sẽ tăng lên đáng kể. Caolac sẽ viết riêng một bài về cách tính tích phân của một số lớp hàm đặc biệt và đính kèm link ở đây khi bài viết hoàn thành.</p>


  <p><b>Ví dụ 2.</b> Giải phương trình $$\frac{xdx}{1+x^2}}+\frac{ydy}{1+y^2}=0,\quad\left( 1 \right)$$ </p>

<p>Dễ dàng thấy $\left( 1 \right)$ là phương trình vi phân tách biến</p>
<p>$\displaystyle \left( 1 \right)\Rightarrow \frac{xdx}{1+x^2}=-\frac{ydy}{1+y^2}$</p>
<p>Lấy tích phân hai vế ta được</p>
<p>$\displaystyle \Rightarrow \int{\frac{xdx}{1+x^2}}=-\int{\frac{ydy}{1+y^2}}$</p>
<p>$\displaystyle \Rightarrow \frac{1}{2}\int{\frac{d\left( 1+x^2 \right)}{1+x^2}}=-\frac{1}{2}\int{\frac{d\left( 1+y^2 \right)}{1+y^2}}$</p>
<p>$\Rightarrow \ln \left( 1+x^2 \right)=-\ln \left( 1+y^2 \right)+C_1$</p>
<p>$\Rightarrow \ln \left( 1+x^2 \right)+\ln \left( 1+y^2 \right)=\ln C,\left( \ln C=C_1 \right)$</p>
<p>$\Rightarrow \ln \left[ \left( 1+x^2 \right)\left( 1+y^2 \right) \right]=\ln C$</p>
<p>$\Rightarrow \left( 1+x^2 \right)\left( 1+y^2 \right)=C$</p>
<p>Vậy nghiệm tổng quát của phương trình là $\left( 1+x^2 \right)\left( 1+y^2 \right)=C$</p>


  <p><b>Ví dụ 3.</b> Giải phương trình $$xy'+y=y^2,\quad \left( 1 \right)$$</p>

<p>$\left( 1 \right)\Rightarrow x\dfrac{dy}{dx}=y^2-y$</p>
<p>$\Rightarrow \dfrac{dy}{y^2-y}=\dfrac{dx}{x}$</p>
<p>Lấy tích phân hai vế</p>
<p>$\displaystyle \Rightarrow \int{\dfrac{dy}{y^2-y}}=\int{\dfrac{dx}{x}}$</p>
<p>$\displaystyle \Rightarrow \int{\left( \dfrac{1}{y-1}-\dfrac{1}{y} \right)dy}=\int{\dfrac{dx}{x}}$</p>
<p>$\Rightarrow \ln \left| y-1 \right|-\ln \left| y \right|=\ln \left| x \right|+C_1$</p>
<p>$\Rightarrow \ln \left| \dfrac{y-1}{y} \right|=\ln \left| x \right|+\ln C=\ln \left| Cx \right|,\left( \ln C=C_1 \right)$</p>
<p>$\Rightarrow Cx=\dfrac{y-1}{y}$</p>
<p>$\Rightarrow Cxy=y-1$</p>
<p>Vậy nghiệm tổng quát là $Cxy=y-1$</p>


  <p><b>Ví dụ 4.</b> Giải phương trình $$y'y^2-x^2=0,\quad\left( 1 \right)$$ với điều kiện ban đầu $y\left( 0 \right)=2$</p>

<p>$\left( 1 \right)\Rightarrow y^2\dfrac{dy}{dx}-x^2=0$</p>
<p>$\Rightarrow y^2dy=x^2dx$</p>
<p>Lấy tích phân hai vế</p>
<p>$\displaystyle \Rightarrow \int{y^2dy}=\int{x^2dx}$</p>
<p>$\displaystyle \Rightarrow \frac{y^3}{3}=\frac{x^3}{3}+C_1$</p>
<p>$\Rightarrow y^3=x^3+C,\left( C=3C_1 \right)$</p>
<p>Với điều kiện ban đầu $y\left( 0 \right)=2$, suy ra</p>
<p>$2^3=0^3+C\Rightarrow C=8$</p>
<p>Vậy nghiệm riêng của phương trình ứng với điều kiện ban đầu $y\left( 0 \right)=2$ là: $y^3=x^3+8$</p>


  <p><b>Ví dụ 5</b> Giải phương trình $$y'=3x^2y,\quad\left( 1 \right)$$</p>

<p>$\left( 1 \right)\Rightarrow \dfrac{dy}{dx}=3x^2y$</p>
<p>$\Rightarrow \dfrac{dy}{y}=3x^2dx$</p>
<p>Lấy tích phân hai vế</p>
<p>$\displaystyle \Rightarrow \int{\frac{dy}{y}}=\int{3x^2dx}$</p>
<p>$\Rightarrow \ln \left| y \right|=x^3+C_1$</p>
<p>$\Rightarrow \left| y \right|=e^{x^3+C_1}$</p>
<p>$\Rightarrow y=Ce^{x^3},\left( C=e^{C_1} \right)$</p>
<p>Vậy nghiệm tổng quát của phương trình là: $y=Ce^{x^3}$</p>


  <p><b>Ví dụ 6.</b> Giải phuơng trình $$y'=x-y+5,\quad \left( 1 \right)$$</p>

<p>$\left( 1 \right)\Rightarrow \dfrac{dy}{dx}=x-y+5$</p>
<p>$\Rightarrow dy=\left( x-y+5 \right)dx,\left( 2 \right)$</p>
<p>Đặt $z=x-y+5\Rightarrow y=x-z+5$</p>
<p>$\Rightarrow dy=dx-dz$</p>
<p>Thay vào $\left( 2 \right)$ ta được</p>
<p>$\Rightarrow dx-dz=zdx$</p>
<p>$\Rightarrow \dfrac{dz}{1-z}=dx$</p>
<p>Lấy tích phân hai vế ta được</p>
<p>$\displaystyle \Rightarrow \int{\dfrac{dz}{1-z}}=\int{dx}$</p>
<p>$\Rightarrow \ln \left| 1-z \right|=x+C_1$</p>
<p>$\Rightarrow \left| 1-z \right|=e^{x+C_1}$</p>
<p>$\Rightarrow 1-z=Ce^{x},\left( C=e^{C_1} \right)$</p>
<p>$\Rightarrow 1-\left( x-y+5 \right)=Ce^{x}$</p>
<p>$\Rightarrow y=Ce^{x}+x+4$</p>
<p>Vậy nghiệm tổng quát của phương trình là: $y=Ce^{x}+x+4$</p>
<hr>


  <p><b>CÁC BÀI VIẾT LIÊN QUAN VỀ PHƯƠNG TRÌNH VI PHÂN</b></p>
  <p><a  href="/blog/mo-au-ve-phuong-trinh-vi-phan.html">MỞ ĐẦU VỀ PHƯƠNG TRÌNH VI PHÂN</a></p>
  <p><a  href="/blog/phuong-trinh-vi-phan-tach-bien.html">PHƯƠNG TRÌNH VI PHÂN TÁCH BIẾN</a></p>
    <p><a  href="/blog/phuong-trinh-vi-phan-tuyen-tinh-cap-1.html">PHƯƠNG TRÌNH VI PHÂN TUYẾN TÍNH CẤP 1</a></p>
 <p><a  href="/blog/phuong-trinh-vi-phan-tuyen-tinh-cap-1.html">PHƯƠNG TRÌNH VI PHÂN TUYẾN TÍNH CẤP 1</a></p>
  <p><a  href="/blog/phuong-trinh-vi-phan.html">PHƯƠNG TRÌNH VI PHÂN ĐẲNG CẤP</a></p>
  <p><a  href="/blog/phuong-trinh-vi-phan-toan-phan.html">PHƯƠNG TRÌNH VI PHÂN TOÀN PHẦN</a></p>

---
layout: post
title: "Phương trình vi phân toàn phần"
tags: [phương trình, vi phân]
categories: [Calculus]
date: 2023-12-20
---
<h2 >1. Tản mạn</h2>
<p>Đầu tiên, sẽ trình bày tóm gọn nhất về dạng và cách giải và sau đó là đưa ra ví dụ, để khi cần thì chỉ cần mở ra nhớ và làm, cái này giống như là delta của phương trình bậc hai, nhớ và làm thôi, còn việc tìm hiểu chuyên sâu như thế nào đó là nhu cầu của mỗi người. OK! Let's Go!</p>

<!--more-->

<hr><!-------------------------------------------------->
<!----------------DẠNG CỦA PHƯƠNG TRÌNH VI PHÂN TOÀN PHẦN------------->
<h2 >2. Dạng phương trình vi phân toàn phần</h2>

  <p>Phương trình vi phân dạng</p>
  <p>$$M(x,y)dx+N(x,y)dy=0\quad (1)$$</p>
  <p>được gọi là <code>phương trình vi phần toàn phần</code> khi nó thỏa mãn điều kiện: vế trái của phương trình $(1)$ phải là vi phân toàn phần của một hàm khả vi nào đó. Tức là tồn tại một hàm $U(x,y)$ khả vi nào đó sao cho</p>
  <p>$$dU(x,y)=M(x,y)dx+N(x,y)dy$$</p>
  <p>Điều kiện để một phương trình vi phân dạng $(1)$ trở thành phương trình vi phân toàn phần (hay cách nhận biết phương trình vi phân toàn phần) là:</p>
  <p>$$\displaystyle \frac{\partial M}{\partial y}=\frac{\partial N}{\partial x}$$</p>

<p><b>Ví dụ.</b> Phương trình vi phân $(3x^2+6xy^2)dx+(6x^2y+4y^3)dy$ là phương trình vi phân toàn phần vì</p>
<p>$M(x,y)=(3x^2+6xy^2), N(x,y)=(6x^2y+4y^3)$</p>
<p>$\displaystyle \frac{\partial M}{\partial y}=\frac{\partial N}{\partial x}=12xy$</p>


<hr>

<!-------------------CÁCH GIẢI-------------------->
<h2 >3. Cách giải</h2>
<p>Ở đây ta chỉ nêu cách giải và áp dụng, nên mới nói là nó cũng như công thức delta mà thôi. Việc tìm hiểu thêm là nhu cầu của mỗi người.</p>

  <p>Nếu phương trình $(1)$ là phương trình vi phân toàn phần thì tích phân tổng quát của phương trình $(1)$ là:</p>
  <p>$$\displaystyle U(x,y)=\int_{x_0}^{x}M(x,y_0)dx+\int_{y_0}^{y}N(x,y)dy=C\quad (2.1)$$</p>
  <p>hoặc</p>
  <p>$$\displaystyle U(x,y)=\int_{x_0}^{x}M(x,y)dx+\int_{y_0}^{y}N(x_0,y)dy=C \quad (2.2)$$</p>
  <p>với $(x_0,y_0)$ là một điểm điểm bất kỳ mà khi thay vào các hàm $M(x,y_0), N(x_0,y)$ xác định. Thường thì ta sẽ chọn sao cho thuận tiện trong việc tính tích phân nhất.</p>

  <p>Cách nhớ của CaolacVC: Công thức này cực kỳ dễ nhớ nếu ta để ý một chút. Trước tiên một cách hình thức ta lấy tích phân hai vế của của phương trình $(1)$, lưu ý chỗ có đuôi vi phân là $dx$ thì cận chạy từ $x_0$ đến $x$, chỗ có phần đuôi là $dy$ thì cận chạy từ $y_0$ đến $y$.</p>
  <p>Điều quan trọng nhất là hãy nhớ chỉ được thay $x_0$ hoặc $y_0$ vào <span style="color:red">một trong hai</span> vị trí: phần có đuôi $dx$ thì chỉ được thay $y_0$. Phần có đuôi $dy$ thì chỉ được thay $x_0$.</p>




<hr>
<!-----------------------VÍ DỤ ÁP DỤNG------------------>
<h2 >4. Ví dụ áp dụng</h2>
<p>Ví dụ luôn là thứ giải đáp mọi thắc mắc mà phần lý thuyết nếu đọc ta vẫn chưa nắm vững.</p>

  <p><b>Ví dụ 1.</b> Giải phương trình:</p>
  <p>$$(3x^2+6xy^2)dx+(6x^2y+4y^3)dy \quad (3.1)$$</p>

<p>Trước tiên ta phải kiểm tra điều kiện để phương trình đã cho là phương trình vi phân toàn phần hay không. Nếu có thì ta mới áp dụng được công thức của bài viết này, nếu không thì bài viết này coi như vứt, chẳng giúp ích được gì. (Mách nhỏ là ở trên, lúc nãy hình như kiểm tra là phương trình vi phân toàn phần rồi hay sao đó)</p>
<p>$M(x,y)=(3x^2+6xy^2), N(x,y)=(6x^2y+4y^3)$</p>
<p>$\displaystyle \frac{\partial M}{\partial y}=\frac{\partial N}{\partial x}=12xy$</p>
<p>Vậy $(3.1)$ là phương trình vi phân toàn phần. Ta chọn $(x_0;y_0)=(0,0)$. Khi đó theo công thức $(2.2)$ ta được</p>
<p>$\displaystyle \int_{0}^{x}(3x^2+6xy^2)dx+\int_{0}^{y}4y^3dy=C$</p>
<p>Hay tích phân tổng quát của $(3.1)$ là</p>
<p>$x^3+3x^2y^2+y^4=C$</p>



<hr>
<h2 >Một số bài tập có lời giải</h2>


  <p><b>Bài tập 1.</b> Giải phương trình $$(y-x)dx+(y^3+x)dy=0$$</p>

<p>$M(x;y)=y-x$</p>
<p>$N(x;y)=y^3+x$</p>
<p>$\dfrac{\partial M}{dy}=\dfrac{\partial N}{dx}=1$ (thỏa mãn điều kiện của phương trình vi phân toàn phần)</p>
<p>Chọn $(x_0;y_0)=(0;0)$. Tích phân tổng quát</p>
<p>$\displaystyle \int_0^x (0-x)dx+\int_0^y (y^3+x)dy=C$</p>
<p>$\displaystyle \Rightarrow \int_0^x(-x)dx+\int_0^y (y^3+x)dy=C$</p>
<p>$\displaystyle \Rightarrow -\frac{x^2}{2}+\frac{y^4}{4}+xy=C$</p>



  <p><b>Bài tập 2.</b> Giải phương trình $$\left[ \left( 1+x+y \right)e^x+e^y \right]dx+\left( e^x+xe^y \right)dy=0$$</p>

<p>$\displaystyle M(x;y)=(1+x+y)e^{x}+e^y$</p>
<p>$\displaystyle N(x;y)=e^x+xe^y$</p>
<p>$\displaystyle \frac{\partial M}{dy}=\frac{\partial N}{dx}=e^x$</p>
<p>Chọn $(x_0;y_0)=(0;0)$</p>
<p>Suy ra tích phân tổng quát</p>
<p>$\displaystyle \int\limits_{0}^{x}{\left[ (1+x+0)e^x+e^0 \right]dx}+\int\limits_{0}^{y}{\left( e^x+xe^y \right)dy}=C$</p>
<p>$\displaystyle \Leftrightarrow \int\limits_{0}^{x}{\left[ (1+x)e^x+1 \right]dx}+\int\limits_{0}^{y}{\left( e^x+xe^y \right)dy}=C$</p>
<p>$\displaystyle \Leftrightarrow \left[ (1+x)e^x-e^x+x \right]\left| _{0}^{x} \right.+\left( ye^x+xe^y \right)\left| _{0}^{y} \right.=C$</p>
<p>$\displaystyle \Leftrightarrow e^x(x+y)+xe^y=C$</p>

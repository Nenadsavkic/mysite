@extends('layouts.app')

@section('title')
    About me
@endsection

@section('content-title')
    <div class="container justify-content-center">
        <h1 class="text-light">Welcome to my site</h1>
    </div>
@endsection

@section('content')

<div class="container mb-5">

    <article class="mt-5">
        <h2>Something about me</h2>
        <div class="row">
            <div class="col-md-8 mt-5">

                <p> Hello, I am Nenad Savkic, I designed this site in order to present myself and my knowledge in the field of programming.
                I graduated from mechanical high school, majoring in "Mechanical Technician". I have done various jobs in my life so far,
                I worked as an operator on a CNC machine in the Shipyard, and warehouse jobs, then in security, and I am currently employed in
                a manufacturing company of wooden furniture. </p>
                 <p>But dealing with these jobs, I have never seen myself in these professions for a long time,
                I have not felt any personal satisfaction, or the possibility of growth and advancement in the company. About 3 years ago,
                out of pure curiosity, I made my first steps in the field of programming. It was pretty clamsy,  because I didn’t
                even know where I should start. Nobody told me that before learning Php, you should first master HTML and CSS. Like I said the
                first steps were out of curiosity, to see if it suits to me, can I learn that. And then I saw that I liked it, and that maybe
                I could put it together nice and usefull.</p>
                <p> Then I found a great online school. So while learning online, I learned the basics of web design and programming.
                 I am currently focusing on Php, MySql and Laravel, and this site was made in Laravel, but I also have solid
                 knowledge of HTML, CSS, Bootstrap, JavaScript, Git.</p>

                <p>This site is designed to present me, and my knowledge gained so far in programming and web design, it represents
                my resume, because I have no work experience untill now in IT.</p>

                <p>On this site you can see ads from the category 'Cars', 'Phones' and 'Computers', of course these are not real ads but only a
                simulation of one such site, you can register as a new user, login, place an image on your profile, create a new ad , edit your
                existing ads, delete, and other...</p>

                <p>If you are on this site, it probably means that I applied for a position in your company, so by reading these lines,
                 you can get some first impressions of me and assess whether my resume meets the needs of the requested position.</p>

                <p>In hope that we will achieve a successful cooperation.</p>

                <p>Sincerely,</p>


                <p>Nenad Savkic</p>



            </div>
            <div class="col-md-4 mt-5">
               <img  src="/me/ja.jpg" alt="ja" class="img-fluid img-thumbnail rounded p-3 ">
            </div>
        </div>


    </article>
    <div class=" container row mt-5 contact">
        <div class="col-6 offset-3 mt-3 ">
            <p>You can contact me by email: <span>savkicn@gmail.com</span></p>
            <p>Or by phone: 061 174 09 89</p>

       </div>
    </div>

</div>

@endsection

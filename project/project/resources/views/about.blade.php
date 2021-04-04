

@extends('header')

@section('title')
    About
@endsection

@section('head_add')
    <link rel="stylesheet" href="{{asset("css/about.css")}}">
@endsection

@section('main_content')

    <div class="contain">
    <section class="first_content">
        <div class="local_title_first">Lorem Ipsum</div>
        <div class="local_text_first">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae eros et urna placerat. </div>
    </section>
    <section class="second_content">
        <div class="second_content_projects">
            <div class="projects_icon">
                <img src="{{asset("img/project.png")}}" alt="">
            </div>
            <div >
                <div class="project_numbers">0</div>
                <div class="project_lable">PROJECT COMPLETED</div>
            </div>
        </div>
        <div class="second_content_working_hours">
            <div class="projects_icon">
                <img src="{{asset("img/hour.png")}}" alt="">
            </div>
            <div>
                <div class="project_numbers">0</div>
                <div class="project_lable">WORKING HOURS</div>
            </div>
        </div>
        <div class="second_content_positive_feedbacks">
            <div class="projects_icon">
                <img src="{{asset("img/feed.png")}}" alt="">
            </div>
            <div>
                <div class="project_numbers">0</div>
                <div class="project_lable">POSITIVE FEEDBACK</div>
            </div>
        </div>
        <div class="second_content_happy_clients">
            <div class="projects_icon">
                <img src="{{asset("img/like.png")}}" alt="">
            </div>
            <div>
                <div class="project_numbers">0</div>
                <div class="project_lable">HAPPY CLIENTS</div>
            </div>
        </div>
    </section>
    <section class="third_content">
        <div class="left_icon">
            <img src="{{asset("img/codecode.jpg")}}" alt="">
        </div>
        <div class="right_aboutme_block">
            <div class="about_me_block">
                <div class="about_me_title">About me</div>
                <div class="about_me_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vehicula purus egestas consequat semper. Vivamus porta ac ligula vel dignissim. Sed tempus nulla id fringilla vehicula. Ut ullamcorper suscipit mi, ultricies consectetur nisl tincidunt ac. Etiam eget libero purus. Nullam gravida lorem ac dictum cursus. Sed hendrerit sodales metus. Aliquam</div>
            </div>
        </div>
    </section>
    <section class="four_content">
        <div class="nead_layout">
            <div class="nead_title">Nead a Project?</div>
            <div class="nead_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, orci sit amet condimentum rhoncus, nibh sapien fringilla nulla, in.</div>
            <div class="nead_button">
                <a href="/">LET’S TALK</a>
            </div>
        </div>
    </section>
    </div>
@endsection

@extends('footer')



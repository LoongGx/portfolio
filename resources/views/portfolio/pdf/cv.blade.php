<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My CV</title>
    <style>
        @page { margin: 0px; }
        body { 
            margin: 0px; 
            font-family: Arial, Helvetica, sans-serif;
        }
        .img-profile{
            position: fixed; 
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 165px;
            top: 90px;
            left: 70px;
            background: gray;
        }
        .small-header{
            color: #011f61;
            border-bottom: 3px solid #6c757d;
        }
        .expList li{
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <!-- First Row -->
    <div style="background: #011f61; height:15%; width:100%; display: block;">
        <div style="display: inline-block; width: 40%;"></div>
        <div style="display: inline-block; width: 60%; height:15%;">
            <div style="width:100%; height:inherit; position: relative;">
                <span style="position: absolute; top:90px; color: white; font-weight: bold;font-size: 25px;">CHEN KUOK LOONG</span>
                <strong style="position: absolute; top:120px; color: white; font-size:16px;">Web Developer (kuokloong0294@gmail.com)</strong>
            </div>
        </div>
    </div>
    
    <!-- Profile Image -->
    <img class="img-profile" src="{!! $profile !!}">

    <!-- Second Row -->
    <div style="height:11%; width:100%;">
        <div style="width: 60%; float: right;">
            <table style="width: full; height: inherit; border-spacing: 0 23px; font-size: 12px; color: #6c757d;">
                <tbody style="">
                    <tr>
                        <td style="vertical-align: text-top;">
                            <span>NO C364, JALAN O-C-8,</span>
                            <span>48100 BATU ARANG, SELANGOR</span>
                        </td>
                        <td style="vertical-align: text-top;">
                            <a style="color: #6c757d; text-decoration: none;" href="https://www.linkedin.com/in/chenkuokloong" target="_blank">linkedin.com/in/chenkuokloong</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: text-top;">017-692 8368</td>
                        <td style="vertical-align: text-top;">
                            <a style="color: #6c757d; text-decoration: none;" href="https://github.com/LoongGx" target="_blank">https://github.com/LoongGx</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Third Row -->
    <div style="width:100%; font-size: 14px;">
        <table style="width:100%;">
            <tbody>
                <tr>
                    <td style="width: 37%; padding-left: 70px; padding-right: 40px;">
                        <table style="border-spacing: 0 10px;">

                            <!-- PROFILE -->
                            <tr>
                                <td>
                                    <b class="small-header">PROFILE</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    I am Chen who interest to learn many new and different technology.
                                    I am currently working as a Web Developer and gain alot of knowledge from this company.
                                    Basically, I involve in Designing workflow and developing user interfaces,
                                    testing, debugging, and training my colleague how to use it with the system i build for them.
                                </td>
                            </tr>

                            <!-- SKILL -->
                            <tr>
                                <td>
                                    <b class="small-header">SKILL</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Front-end</strong><br>
                                    <span style="">HTML, CSS, JS, JQUERY</span><br><br>

                                    <strong>Back-end</strong><br>
                                    <span style="">PHP, PYTHON</span><br><br>

                                    <strong>Database</strong><br>
                                    <span style="">MYSQL, SQLITE</span><br><br>

                                    <strong>Framework</strong><br>
                                    <span style="">LARAVEL, DJANGO</span><br><br>

                                    <strong>Others</strong><br>
                                    <span style="">BOOTSTRAP, TAILWIND, GIT, NPM, PIP, COMPOSER, RASPBIAN OS</span><br><br>
                                </td>
                            </tr>

                            <!-- EDUCATION -->
                            <tr>
                                <td>
                                    <b class="small-header">EDUCATION</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>2012-2015 (Diploma)</strong><br>
                                    <span style="display: inline-block;margin-bottom: 5px;">Tunku Abdul Rahman University College</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>2007-2011 (SPM)</strong><br>
                                    <span style="display: inline-block;margin-bottom: 5px;">SMK Tuanku Abdul Rahman</span>
                                </td>
                            </tr>

                        </table>
                    </td>
                    <td style="width: 60%; vertical-align:top; font-size: 14px; padding-right: 20px; padding-left: 16px;">
                        <table style="border-spacing: 0 10px;">

                            <!-- CAREER -->
                            <tr>
                                <td>
                                    <b class="small-header">CAREER</b>
                                </td>
                            </tr>

                            <!-- Web Developer -->
                            <tr>
                                <td>2019-now</td>
                                <td style="padding-left: 20px; padding-right: 20px;">
                                    <b>WEB DEVELOPER</b>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="padding-left: 20px; padding-right: 20px;">
                                    <p style="margin-top:0;">
                                    Responsible for working on range of projects, 
                                    designing appealing websites and interacting on a daily basis
                                    with clients, colleague and manager. Developing from front end to back end.</p>
                                    <ul class="expList">
                                        <li>Experienced in using Laravel Framework to build Web Application</li>
                                        <li>Experienced in using Django Framework to build Web Application</li>
                                        <li>Experienced in using Bootstrap 4&5 CSS to design Web Application</li>
                                        <li>Experienced in using Tailwind CSS to design Web Application</li>
                                        <li>Experienced in using Linux to handle Web Server</li>
                                        <li>Experienced in using RabbitMQ to handle Queue Server</li>
                                        <li>Experienced in using kivy python library to build small app for raspberry pi</li>
                                        <li>Experienced in using GIT to control version of the project</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td>2016-2018</td>
                                <td style="padding-left: 20px; padding-right: 20px;">
                                    <b>EDUCATION FACILITATOR</b>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="padding-left: 20px; padding-right: 20px;">
                                    <p style="margin-top:0;">
                                        Responsible for teaching primary school student computer knowledge, 
                                        guide student how to use computer and some simple programming
                                    </p>
                                    <ul class="expList">
                                        <li>Introduce and teach various type of Microsoft Office for students</li>
                                        <li>Teach Scratch 2.0 block-based visual programming language to student</li>
                                        <li>Teach Lego Mindstorms EV3 software to run a robotic during class</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
<!-- <strong style="position: absolute; top:20px; color: white; font-size:16px;">Web Developer (kuokloong0294@gmail.com)</strong>
    <strong style="position: absolute; top:70px; color: white; font-size:16px;">Web Developer (kuokloong0294@gmail.com)</strong> -->

    <!-- border: 1px solid black; -->
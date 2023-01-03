<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

        <link rel="stylesheet" href="style.css">
        <title>Music App</title>
        <style>
            header .song_side::before {

                background: url('arjit_bg.png');

            }
            .sidebar__logo{
    /* display: flex; */
    align-items: center;
    height: 73px;
    padding: 8px;
    margin-right: 13px;
    margin-left: 10px;
    margin-bottom: 21px;
    margin-top: 12px;
}
        </style>
    </head>

    <body>
        <header>
            <div class="menu_side">
                <!-- <h1>Playlist</h1> -->
                <img src="https://getheavy.com/wp-content/uploads/2019/12/spotify2019-830x350.jpg" class="sidebar__logo"> 
                <div class="playlist">
                    <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
                    <!-- <h4><span></span><i class="bi bi-music-note-beamed"></i> Last Listening</h4>
                    <h4><span></span><i class="bi bi-music-note-beamed"></i> Recommended</h4> -->
                </div>
                <div class="menu_song">
                    <li class="songItem">
                        <span>01</span>
                        <img src="img/1.jpg" alt="Alan">
                        <h5>
                            On My Way
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                        <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                    </li>
                    <li class="songItem">
                        <span>02</span>
                        <img src="img/1.jpg" alt="Alan">
                        <h5>
                            On My Way
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                        <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                    </li>
                    <li class="songItem">
                        <span>03</span>
                        <img src="img/1.jpg" alt="Alan">
                        <h5>
                            On My Way
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                        <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                    </li>
                    <li class="songItem">
                        <span>04</span>
                        <img src="img/1.jpg" alt="Alan">
                        <h5>
                            On My Way
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                        <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                    </li>
                    <li class="songItem">
                        <span>05</span>
                        <img src="img/1.jpg" alt="Alan">
                        <h5>
                            On My Way
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                        <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                    </li>
                    <li class="songItem">
                        <span>06</span>
                        <img src="img/1.jpg" alt="Alan">
                        <h5>
                            On My Way
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                        <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                    </li>
                </div>
            </div>


            <div class="song_side">
                <nav>
                    <ul>
                     <a href="index.php">   <li>Discover </li></a>
                        <li>MY LIBRARY</li>
                        <li>RADIO</li>
                    </ul>
                   


                    <div class="search">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="Search Music...">
                        <div class="search_result">
                           
                        </div>
                    </div>



                    <div class="user">
                        <!-- <img src="img/KDS CODER.png" alt="User" title="KDS CODER (Jahid Khan)"> -->
                        <a href="signup.php"><button style="position: relative;
                                                            width: 65px;
                                                            height: 34px;
                                                            border-radius: 7px;
                                                            cursor: pointer;
                                                            background: green;
                                                            border:1px solid white;
                                                            color: white;
                                                            cursor: pointer;">
                                            Login</button>
                        </a>               
                    </div>
                </nav>
                <div class="content">
                    <h1>Arjit Singh</h1>
                    <p>
                        You were the shadow to my light Did you feel us Another start You fade
                        <br>
                        Away afraid our aim is out of sight Wanna see us Alive
                    </p>
                    <div class="buttons">
                        <button>PLAY</button>
                        <button>FOLLOW</button>
                    </div>
                </div>
                <div class="popular_song">
                    <div class="h4">
                        <h4>Popular Song</h4>
                        <div class="btn_s">
                            <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                            <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                        </div>
                    </div>
                    <div class="pop_song">
                        <li class="songItem">
                            <div class="img_play">
                                <img src="img/1.jpg" alt="alan">
                                <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                            </div>
                            <h5>On My Way
                                <br>
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                        </li>
                        <li class="songItem">
                            <div class="img_play">
                                <img src="img/1.jpg" alt="alan">
                                <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                                <!-- change All id  -->
                            </div>
                            <h5>On My Way
                                <br>
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                        </li>
                        <li class="songItem">
                            <div class="img_play">
                                <img src="img/1.jpg" alt="alan">
                                <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                            </div>
                            <h5>On My Way
                                <br>
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                        </li>
                        <li class="songItem">
                            <div class="img_play">
                                <img src="img/1.jpg" alt="alan">
                                <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                            </div>
                            <h5>On My Way
                                <br>
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                        </li>
                        <li class="songItem">
                            <div class="img_play">
                                <img src="img/1.jpg" alt="alan">
                                <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                            </div>
                            <h5>On My Way
                                <br>
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                        </li>
                        <li class="songItem">
                            <div class="img_play">
                                <img src="img/1.jpg" alt="alan">
                                <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                            </div>
                            <h5>On My Way
                                <br>
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                        </li>
                        <li class="songItem">
                            <div class="img_play">
                                <img src="img/1.jpg" alt="alan">
                                <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                            </div>
                            <h5>On My Way
                                <br>
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                        </li>
                        <li class="songItem">
                            <div class="img_play">
                                <img src="img/1.jpg" alt="alan">
                                <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                            </div>
                            <h5>On My Way
                                <br>
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                        </li>
                        <li class="songItem">
                            <div class="img_play">
                                <img src="img/1.jpg" alt="alan">
                                <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                            </div>
                            <h5>On My Way
                                <br>
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                        </li>
                    </div>
                </div>
                <div class="popular_artists">
                    <div class="h4">
                        <h4>Popular Artists</h4>
                        <div class="btn_s">
                            <i id="left_scrolls" class="bi bi-arrow-left-short"></i>
                            <i id="right_scrolls" class="bi bi-arrow-right-short"></i>
                        </div>
                    </div>
                    <!-- <div class="item">
                        <li>
                            <a href="arjit.php"> <img src="img/arjit.jpg" alt="Arjit Singh" title="Arjit Singh"> </a>
                        </li>
                        <li>
                            <img src="img/alan.jpg" alt="Alan Walker" title="Alan Walker">
                        </li>
                        <li>
                            <img src="img/atif.jpg" alt="Atif Aslam" title="Atif Aslam">
                        </li>
                        <li>
                            <img src="img/guru.jpg" alt="Guru RAndawa" title="Guru Randawa">
                        </li>
                        <li>
                            <img src="img/dhvani.jpg" alt="Dhvani" title="Dhvani">
                        </li>
                        <li>
                            <img src="img/Diljit_Dosanjh.jpg" alt="Diljit Dosanjh" title="Diljit Dosanjh">
                        </li>
                        <li>
                            <img src="img/jubin Nautiyal.jpg" alt="Jubin Nautiyal" title="Jubin Nautiyal">
                        </li>
                        <li>
                            <img src="img/neha.jpg" alt="Neha Kakker" title="Neha Kakker">
                        </li>
                        <li>
                            <img src="img/justin-bieber-lede.jpg" alt="Justin Bieber" title="Justin Bieber">
                        </li>
                        <li>
                            <img src="img/honey.jpg" alt="Honey Singh" title="Honey Singh">
                        </li>
                        <li>
                            <img src="img/akhil.jpg" alt="Akhil" title="Akhil">
                        </li>
                    
                    </div> -->

                    <div class="item">
                        <li>
                            <a href="arjit.php"> <img src="img/arjit.jpg" alt="Arjit Singh" title="Arjit Singh"> </a>
                        </li>
                        <li>
                            <a href="alan.php"><img src="img/alan.jpg" alt="Alan Walker" title="Alan Walker"></a>
                        </li>
                        <li>
                            <a href="artif.php"><img src="img/atif.jpg" alt="Atif Aslam" title="Atif Aslam"> </a>  .
                        </li>
                        <li>
                            <a href="guru.php"><img src="img/guru.jpg" alt="Guru RAndawa" title="Guru Randawa"> </a>
                        </li>
                        <li>
                            <a href="dhvani.php"><img src="img/dhvani.jpg" alt="Dhvani" title="Dhvani"></a>
                        </li>
                        <li>
                            <a href="Diljit.php"><img src="img/Diljit_Dosanjh.jpg" alt="Diljit Dosanjh" title="Diljit Dosanjh"></a>
                        </li>
                        <li>
                            <a href="jubin.php"> <img src="img/jubin Nautiyal.jpg" alt="Jubin Nautiyal" title="Jubin Nautiyal"> </a>
                        </li>
                        <li>
                            <a href="neha.php"><img src="img/neha.jpg" alt="Neha Kakker" title="Neha Kakker"></a>
                        </li>
                        <li>
                            <a href="justin.php"><img src="img/justin-bieber-lede.jpg" alt="Justin Bieber" title="Justin Bieber"></a>
                        </li>
                        <li>
                            <a href="honey.php"><img src="img/honey.jpg" alt="Honey Singh" title="Honey Singh"></a>
                        </li>
                        <li>
                            <a href="akhil.php"> <img src="img/akhil.jpg" alt="Akhil" title="Akhil"></a>
                        </li>
                     
                    </div>
                </div>
            </div>


            <div class="master_play">
                <div class="wave">
                    <div class="wave1"></div>
                    <div class="wave1"></div>
                    <div class="wave1"></div>
                </div>
                <img src="img/26th.jpg" alt="Alan" id="poster_master_play">
                <h5 id="title">Vande Mataram<br>
                    <div class="subtitle">Bankim Chandra</div>
                </h5>
                <div class="icon">
                    <i class="bi shuffle bi-music-note-beamed">next</i>
                    <!-- <i class="bi shuffle bi-music-note-beamed"></i> -->
                    <i class="bi bi-skip-start-fill" id="back"></i>
                    <i class="bi bi-play-fill" id="masterPlay"></i>
                    <i class="bi bi-skip-end-fill" id="next"></i>

                    <a href="" download id="download_music"><i
                            class="bi bi-cloud-arrow-down-fill"></i> </a>
                </div>
                <span id="currentStart">0:00</span>
                <div class="bar">
                    <input type="range" id="seek" min="0" value="0" max="100">
                    <div class="bar2" id="bar2"></div>
                    <div class="dot"></div>
                </div>
                <span id="currentEnd">0:00</span>

                <div class="vol">
                    <i class="bi bi-volume-down-fill" id="vol_icon"></i>
                    <input type="range" id="vol" min="0" value="30" max="100">
                    <div class="vol_bar"></div>
                    <div class="dot" id="vol_dot"></div>
                </div>
            </div>
        </header>
        <script src="honey.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    </body>

</html>
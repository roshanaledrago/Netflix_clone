const music =new Audio('audio/1.mp3');
//music.play();

const songs =[
    {
        id: "1",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/1.jpg"
    },
    {
        id: "2",
        songName:`alan-walker-fade <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/1.jpg"
    },
    {
        id: "3",
        songName:`Cartoon- On & On  <br>
        <div class="subtitle">levis david</div>`,
        poster: "img/3.jpg"
    },
    {
        id: "4",
        songName:`damn <br>
        <div class="subtitle">nowhere</div>`,
        poster: "img/4.jpg"
    },
    {
        id: "5",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/5.jpg"
    },
    {
        id: "6",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/6.jpg"
    },
    {
        id: "7",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/7.jpg"
    },
    {
        id: "8",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/8.jpg"
    },
    {
        id: "9",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/9.jpg"
    },
    {
        id: "10",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/10.jpg"
    },
    {
        id: "11",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/11.jpg"
    },
    {
        id: "12",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/12.jpg"
    },
    {
        id: "13",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/13.jpg"
    },
    {
        id: "14",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/14.jpg"
    },
    {
        id: "15",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/15.jpg"
    },
    {
        id: "16",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/16.jpg"
    },
    {
        id: "17",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/17.jpg"
    },
    {
        id: "18",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/18.jpg"
    },
    {
        id: "19",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/1.jpg"
    },
    {
        id: "20",
        songName:`On My Way <br>
        <div class="subtitle">Alan walker</div>`,
        poster: "img/1.jpg"
    },
   
];

Array.from(document.getElementsByClassName('songItem')).forEach((e, i)=>{
    e.getElementsByTagName('img')[0].src=songs[i].poster;
    e.getElementsByTagName('h5')[0].innerHTML=songs[i].songName;
});

let masterPlay =document.getElementById('masterPlay');
let wave=document.getElementById('wave');

masterPlay.addEventListener('click',()=>{
    if (music.paused || music.currentTime <=0)  {
        music.play();
        wave.classList.add('active1');
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');
        
    } else {
        music.pause();
        wave.classList.remove('active1');
        masterPlay.classList.add('bi-play-fill');
        masterPlay.classList.remove('bi-pause-fill');
    }
});
const makeAllplays=()=>{
    Array.from(document.getElementsByClassName('PlayListPlay')).forEach((el)=>{
        el.classList.add('bi-play-circle-fill');
        el.classList.remove('bi-pause-circle-fill');
    })
}
const makeAllBackground=()=>{
    Array.from(document.getElementsByClassName('songItem')).forEach((el)=>{
        el.style.background='rgb(105,105,105, .0)';
    })
}

let index=0;
let poster_mater_play = document.getElementById('poster-mater-play');
let title=document.getElementById('title');

Array.from(document.getElementsByClassName('PlayListPlay')).forEach((e)=>{
    e.addEventListener('click',(el)=>{
        index = el.target.id;
        //console.log(index);
        music.src=`audio/${index}.mp3`;
        poster_mater_play.src=`img/${index}.jpg`;
        music.play();
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');

        let songTitles =songs.filter((els)=>{
            return els.id==index;
        });
        songTitles.forEach(elss=>{
            let{songName, poster}=elss;
            title.innerHTML = songName;
            poster_mater_play.src = poster;
        });
        makeAllBackground();
        Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105,105,105,.1)";
        makeAllplays();
        el.target.classList.remove('bi-play-circle-fill');
        el.target.classList.add('bi-pause-circle-fill');
        wave.classList.add('active1');



    });
})

let currentStart=document.getElementById('CurrentStart');
let currentEnd=document.getElementById('CurrentEnd');
let seek=document.getElementById('seek');
let bar2=document.getElementById('bar2');
let dot=document.getElementsByClassName('dot')[0];





music.addEventListener('timeupdate',()=>{
    let music_cur=music.currentTime;
    let music_dur=music.duration;

    let min1 = Math.floor(music_dur/60);
    let sec1 = Math.floor(music_dur%60);
     //console.log(music_dur);
     if (sec1<10) {
        sec1=`0${sec1}`;
        
     }

     currentEnd.innerText=`${min1}:${sec1}`;

     let min2=Math.floor(music_cur/60);
     let sec2=Math.floor(music_cur%60);
     if (sec2<10) {
        sec2=`0${sec2}`;
        
     }

     currentStart.innerText=`${min2}:${sec2}`;

     let progressBar=parseInt((music_cur/music_dur)*100);
     seek.value=progressBar;
     //console.log(seek.value);
     let seekbar=seek.value;
     bar2.style.width=`${seekbar}%`;
     dot.style.left=`${seekbar}%`;




});
seek.addEventListener('change',()=>{
    music.currentTime=seek.value*music.duration/100;
});
let vol_icon=document.getElementById('vol-item');
let vol=document.getElementById('vol');
let vol_bar=document.getElementsByClassName('vol-bar')[0];
let vol_dot=document.getElementById('vol-dot');

vol.addEventListener('change',()=>{
    if (vol.value==0) {
        vol_icon.classList.remove('bi-volume-up-fill')
        vol_icon.classList.remove('bi-volume-down-fill')
        vol_icon.classList.add('bi-volume-off-fill')
        
    }
    if (vol.value>0) {
        vol_icon.classList.remove('bi-volume-up-fill')
        vol_icon.classList.add('bi-volume-down-fill')
        vol_icon.classList.remove('bi-volume-off-fill')

        
    }
    if (vol.value>50) {
        vol_icon.classList.remove('bi-volume-up-fill')
        vol_icon.classList.add('bi-volume-down-fill')
        vol_icon.classList.remove('bi-volume-off-fill')

        
    }
    let vol_a=vol.value;
    vol_bar.style.width=`${vol_a}%`;
    vol_dot.style.width=`${vol_a}%`;
    music.volume=vol_a/100;
})









let pop_song_left=document.getElementById('pop-song-left');
let pop_song_right=document.getElementById('pop-song-right');
let pop_song=document.getElementsByClassName('pop-song')[0];

pop_song_right.addEventListener('click',()=>{
    pop_song.scrollLeft +=330;
});
pop_song_left.addEventListener('click',()=>{
    pop_song.scrollLeft -=330;
});
let pop_art_left=document.getElementById('pop-art-left');
let pop_art_right=document.getElementById('pop-art-right');
let item=document.getElementsByClassName('item')[0];

pop_art_right.addEventListener('click',()=>{
    item.scrollLeft +=330;
});
pop_art_left.addEventListener('click',()=>{
    item.scrollLeft -=330;
});




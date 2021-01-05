var pk = [];



function setModal(i){

  $("#mod_img").attr("src",pk[i]['image']);
  $("#mod-news-title").html('<a style="text-decoration: none;" href="'+pk[i]['url']+'">'+pk[i]['title']+'</a>');
  $("#sharebtn").attr("onclick","send_data("+i+")");

}


function send_data(id){
    var description = $("#sharetext").val();

    $.ajax({
      method: "POST",
      url: "API/share.php",
      data: { 
      'url': pk[id]['url'], 
      'image': pk[id]['image'],
      'title': pk[id]['title'],
      'description':description,
      'source':pk[id]['source'],
      'news_date':pk[id]['published_at'],
      'author':pk[id]['author'],
      'category':pk[id]['category'],
      'description2':pk[id]['description'],

      }
      // beforeSend: function() {
      //   if(load_number) $('div.box').show();
      // },
      // complete: function(){
      //   if(load_number) $('div.box').hide();
      // },
      }).done(function( msg ) {
          $('#staticBackdrop').modal('hide');
          $('#sharetext').val("");

          alert("Your news is shared!!");

      });
}


function fatch_news_data(){
  
    $.ajax({
      method: "GET",
      url: "API/newsapi.php",
      beforeSend: function() {
         $('#loader').show();
      },
      complete: function(){
         $('#loader').hide();
      },
    }).done(function( msg ) {
        var msg = JSON.parse(msg);
        msg = msg['data'];
        // console.log(msg);

        SetNewsView(msg);
        pk = msg; 

    });
   
}

function SetNewsView(msg) {
    var main_str = "";
    for (var i = 0; i < msg.length; i++) {

        if(msg[i]['image']==null){
          msg[i]['image']= "image/bann.png";
        }
        var tdate;
        if(msg[i]['published_at']!=null){
          var options = {year: 'numeric', month: 'short', day: 'numeric' };
          var today  = new Date(msg[i]['published_at']);
          tdate =today.toLocaleDateString("en-US", options)
        }


        var temp_str = '<li class="list-group-item" > <div><div class="row"><div class="col-3 m-auto"><div class="padding-auto"><img style="border-radius: 10px;" src="'+msg[i]["image"]+'" height="100%" width="95%"></div></div><div class="col-9"  style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;"><div class="row1"><div class="row mt-3"><div class="col "><div class="source">'+msg[i]["source"]+'</div></div><div class="col" style="text-align: right;"><div class="date" style="color:#d4633d;"><strong> '+tdate+'</strong></div></div></div></div><div class="row"><div class="col"><div class="title"> <a style="text-decoration: none;" href="'+msg[i]["url"]+'">'+msg[i]["title"]+'</a></div></div></div><div class="row"><div class="col"><p class="description">'+msg[i]["description"]+'</p></div></div><div class="row"><div class="col"><div class="date row3"><strong>Author: </strong>'+msg[i]["author"]+'</div></div><div class="col" style="text-align: center;"><div class="date row3"><strong>Category: </strong>'+msg[i]["category"]+'</div></div><div class="col" style="text-align: right;"><button class="btn btn-success btn-sm btn-blc" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="setModal('+i+')">Share</button></div></div></div></div></div></li>';
        main_str+=temp_str;

    }
    $("#news_api").html(main_str);
}


function SetOwnshareView(msg) {
    var main_str = "";
    for (var i = 0; i < msg.length; i++) {


        var tdate;
        if(msg[i]['news_date']!=null){
          var options = {year: 'numeric', month: 'short', day: 'numeric' };
          var today  = new Date(msg[i]['news_date']);
          tdate =today.toLocaleDateString("en-US", options);
          console.log(tdate);
        }


        var temp_str = '<li class="list-group-item" > <div id="own'+msg[i]["id"]+'"><div style="display:flex;text-align:right;"><img style="border-radius: 30px;" src="image/people.png" height="20px" width="20px"><div style="padding-left:7px;"><strong>'+msg[i]["username"]+'</strong></div></div><div style="font-size: 11pt;padding:0px;"><p style="padding:0px;margin:3px;">'+msg[i]["des"]+'</p></div><div class="row"><div class="col-3 m-auto"><div class="padding-auto"><img style="border-radius: 10px;" src="'+msg[i]["image"]+'" height="100%" width="95%"></div></div><div class="col-9"  style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;"><div class="row1"><div class="row mt-3"><div class="col"><div class="source">'+msg[i]["source"]+'</div></div><div class="col" style="text-align: right;"><div class="date" style="color:#d4633d;"><strong> '+tdate+'</strong></div></div></div></div><div class="row"><div class="col"><div class="title"> <a style="text-decoration: none;" href="'+msg[i]["url"]+'">'+msg[i]["title"]+'</a></div></div></div><div class="row"><div class="col"><p class="description">'+msg[i]["description"]+'</p></div></div><div class="row"><div class="col"><div class="date row3"><strong>Author: </strong>'+msg[i]["author"]+'</div></div><div class="col" style="text-align: center;"><div class="date row3"><strong>Category: </strong>'+msg[i]["category"]+'</div></div><div class="col" style="text-align: right;"><button class="btn btn-danger btn-sm btn-blc" type="button"  onclick="delete_post('+msg[i]["id"]+')">delete</button></div></div></div></div></div></li>';
        main_str+=temp_str;

    }

    if(msg.length==0){
      main_str+="<p style='text-align:center;'> You don't share any news Yet!</p>"
    }
    $("#news_api").html(main_str);
}

function SetothershareView(msg) {
    var main_str = "";
    for (var i = 0; i < msg.length; i++) {


        var tdate;
        if(msg[i]['news_date']!=null){
          var options = {year: 'numeric', month: 'short', day: 'numeric' };
          var today  = new Date(msg[i]['news_date']);
          tdate =today.toLocaleDateString("en-US", options);
          console.log(tdate);
        }



          var temp_str = '<li class="list-group-item" > <div id="own'+msg[i]["id"]+'"><div style="display:flex;text-align:right;"><img style="border-radius: 30px;" src="image/people.png" height="20px" width="20px"><div style="padding-left:7px;"><strong>'+msg[i]["username"]+'</strong></div></div><div style="font-size: 11pt;padding:0px;"><p style="padding:0px;margin:3px;">'+msg[i]["des"]+'</p></div><div class="row"><div class="col-3 m-auto"><div class="padding-auto"><img style="border-radius: 10px;" src="'+msg[i]["image"]+'" height="100%" width="95%"></div></div><div class="col-9"  style="background: #ede7d5;border-radius: 10px; padding-right:1px!important;"><div class="row1"><div class="row mt-3"><div class="col"><div class="source">'+msg[i]["source"]+'</div></div><div class="col" style="text-align: right;"><div class="date" style="color:#d4633d;"><strong> '+tdate+'</strong></div></div></div></div><div class="row"><div class="col"><div class="title"> <a style="text-decoration: none;" href="'+msg[i]["url"]+'">'+msg[i]["title"]+'</a></div></div></div><div class="row"><div class="col"><p class="description">'+msg[i]["description"]+'</p></div></div><div class="row"><div class="col"><div class="date row3"><strong>Author: </strong>'+msg[i]["author"]+'</div></div><div class="col" style="text-align: center;"><div class="date row3"><strong>Category: </strong>'+msg[i]["category"]+'</div></div></div></div></div></div></li>';
        main_str+=temp_str;

    }
    $("#news_api").html(main_str);
}


function delete_post(id){

    if (confirm("Are you sure to delete!")) {
      $.ajax({
        method: "POST",
        url: "API/delete.php",
        data: {
          'post_id' : id,
        }
        // beforeSend: function() {
        //   if(load_number) $('div.box').show();
        // },
        // complete: function(){
        //   if(load_number) $('div.box').hide();
        // },
      }).done(function( msg ) {
          console.log(msg);
          $("#own"+id).html('<p style="text-align:center"> Post deleted</p>')

      });
  } 
}

function factch_own_post(){
  $.ajax({
      method: "GET",
      url: "API/fatch_my.php",
      beforeSend: function() {
         $('#loader').show();
      },
      complete: function(){
         $('#loader').hide();
      },
    }).done(function( msg ) {
        var msg = JSON.parse(msg);
        SetOwnshareView(msg);
    });
}

function home_post(){
  SetNewsView(pk);
}


function factch_others_post(){
    $.ajax({
      method: "GET",
      url: "API/fatch_all.php",
      beforeSend: function() {
         $('#loader').show();
      },
      complete: function(){
       $('#loader').hide();
      },
    }).done(function( msg ) {
        var msg = JSON.parse(msg);
        SetothershareView(msg);
    });
}


fatch_news_data();


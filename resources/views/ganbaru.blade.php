<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>畜産映像情報 がんばる！畜産！３</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../vendor/css/main.css">

</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content_top row">
                <div class="col-12 top_content_main form1_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="ganbaru_title text-center">
                                    <h1>動画</h1>
                                </div>
                                <table class="ganbaru_table">
                                    <tr class="ganbaru_category">
                                        <th>カテゴリで検索</th>
                                        <td>
                                            <?php foreach ($categories as $category): ?>
                                        <a href="ganbaru?c={{ $category->category_id }}"><span class="<?php if ($search_cate == $category->category_id) echo('selected'); ?> <?php if($category->category_id==2) {echo 'red';} 
                                                            elseif($category->category_id==3) {echo 'yellow';} 
                                                            else {echo'green';}?>">
                                                            {{ $category->name }}
                                                        </span></a>
                                        <?php endforeach; ?>
                                        </td>
                                    </tr>
                                    <tr class="ganbaru_tag">
                                        <th>タグで検索</th>
                                        <td style="width: 70%">
                                            <?php foreach ($tags as $tag): ?>
                                                <a href="ganbaru?tag={{ $tag->tag_id }}"><span class="<?php if ($search_tag == $tag->tag_id) echo('selected'); ?>">{{ $tag->name }}</span></a>
                                             <?php endforeach;?>
                                        </td>
                                    </tr>
                                    <tr class="ganbaru_search">
                                        <th>検索</th>
                                        <td>
                                            <form action="" method="GET">
                                            <input type="text" name="txt" value="" placeholder="動画検索: キーワードを入力してください">
                                            <input type="submit" value="検索" style="width: 20%; cursor:pointer;">
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row ganbaru_post">
                            <?php foreach ($posts as $post): ?>
                            <?php 
                                if ($search_tag != null) {
                                    $post_tags = explode(",", $post->tag_id); 
                                    if(!in_array($search_tag,$post_tags)){
                                        continue;
                                    }
                                } 
                            ?>
                            <div class="col-4 ganbaru_single_post">
                                <?php foreach ($categories as $category): ?>
                                <span class="ganbaru_single_post_cate <?php if($post->category_id==2) {echo 'red';} 
                                                                        elseif($post->category_id==3) {echo 'yellow';} 
                                                                        else {echo'green';}?>">
                                    <?php if ($category->category_id == $post->category_id) echo $category->name;?>
                                </span>
                            <?php endforeach;?>
                                <div class="ganbaru_single_post_thumb" style="background-image: url(../vendor/img/{{ $post->image }});">&nbsp;</div>
                                <div class="ganbaru_single_post_head">
                                <h3 class="ganbaru_single_post_date">{{ $post->g_date }}</h3>
                                <h3 class="ganbaru_single_post_title">{{ $post->title }}</h3>
                                </div>
                                <div class="ganbaru_single_post_body">
                                    {{ $post->g_content }}
                                </div>
                                <div class="ganbaru_single_post_button">
                                    <a href="" class="ganbaru_single_post_min30">30分</a>
                                    <a href="" class="ganbaru_single_post_min3">3分</a>
                                </div>
                                {{-- <div class="ganbaru_tag">            
                                    <span>aaaaaaaa</span><span>aaaaaaaa</span>
                                </div> --}}
                            </div>
                        <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../vendor/js/main.js"></script>
</body>

</html>
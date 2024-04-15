<?php
/* Template Name:"トップページ" */
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日本の四季-トップページ</title>

    <?php get_header(); ?>

    <main>
        <div class="main-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main.jpeg" alt="">
        </div><!-- /.main-visual -->
        <div class="main-text">
            <h2>四季の移り変わり</h2>
                <p>日本の気候は温暖でおだやかで、しかも春夏秋冬という四季にめぐまれています。<br>春には三寒四温、三日間寒さが続くと四日間暖かい日が続き、そうしているうちに桜が咲き、夏が来る、そして秋になり、また冬を迎える。このように、日本の気候は少しづつ微妙に季節の顔を変えながら、こまやかに移り変わっていくのです。<br>春夏秋冬という四季に彩られた日本は、その恩恵ともいうべき、ゆたかな自然にもめぐまれ、その季節に応じたさまざまな文化を育んできたのです。</p>
        </div><!-- /.main-text -->
    </main>
    
    <?php get_footer(); ?>




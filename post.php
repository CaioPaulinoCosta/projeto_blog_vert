<?php 
include_once("templates/header.php");

if(isset($_GET['id'])) {
     
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {

        if($post['id'] == $postId) {
            $currentPost = $post;
        }
    }

}
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto tempora id molestias eaque dolor, quod, dignissimos quasi magnam aliquam neque laboriosam ipsam vel reiciendis autem accusantium delectus deserunt libero exercitationem.
            Totam omnis nesciunt, vitae alias non dolorum? Qui provident, consequatur illo veritatis corporis quidem nobis quia harum, aut possimus quos, dolore dolor ipsum natus recusandae est aliquid quod vero animi?
            Nobis, vero. Vitae culpa sint tenetur tempora quasi, enim inventore, dolorem dolorum delectus nisi vel, velit corporis doloremque nihil ex provident. Voluptate quisquam, magnam reprehenderit rerum incidunt architecto nam fuga.
            Illo illum perferendis iste aliquid sequi corrupti quasi esse hic perspiciatis. Modi, saepe velit deserunt ea vero ab nostrum dolore voluptatem dolorem quos corporis ipsum fugiat? Error quo molestias tenetur?
            Facere blanditiis maxime sequi deserunt nisi nihil ullam placeat. Facilis ipsam nisi deleniti. Quisquam culpa sunt eveniet vitae, quia provident minima, numquam nostrum iste ipsam aspernatur possimus error odio nisi?</p>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto tempora id molestias eaque dolor, quod, dignissimos quasi magnam aliquam neque laboriosam ipsam vel reiciendis autem accusantium delectus deserunt libero exercitationem.
            Totam omnis nesciunt, vitae alias non dolorum? Qui provident, consequatur illo veritatis corporis quidem nobis quia harum, aut possimus quos, dolore dolor ipsum natus recusandae est aliquid quod vero animi?
            Nobis, vero. Vitae culpa sint tenetur tempora quasi, enim inventore, dolorem dolorum delectus nisi vel, velit corporis doloremque nihil ex provident. Voluptate quisquam, magnam reprehenderit rerum incidunt architecto nam fuga.
            Illo illum perferendis iste aliquid sequi corrupti quasi esse hic perspiciatis. Modi, saepe velit deserunt ea vero ab nostrum dolore voluptatem dolorem quos corporis ipsum fugiat? Error quo molestias tenetur?
            Facere blanditiis maxime sequi deserunt nisi nihil ullam placeat. Facilis ipsam nisi deleniti. Quisquam culpa sunt eveniet vitae, quia provident minima, numquam nostrum iste ipsam aspernatur possimus error odio nisi?</p>
        </div>
        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tags-list">
        <div class="tags-container">
        <?php foreach($currentPost['tags'] as  $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>  
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
        <?php foreach($categories as $categories): ?>
        <li><a href="#"><?= $categories ?></a></li>
        <?php endforeach; ?>  
        </ul>
        </div>
    </aside>
    </main>
    
<?php
include_once("templates/footer.php");
?>
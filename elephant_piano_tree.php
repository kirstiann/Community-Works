<?php

// initializing the required variables to perform the tasks
$title = 'Community Works';
$articles = array();
$totalArticles = 0;

// Community Works page starts here
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <h2>Total Articles: <?php echo $totalArticles; ?></h2>
    <?php foreach ($articles as $key => $article): ?>
        <h3><?php echo $article['title']; ?></h3>
        <p><?php echo $article['content']; ?></p>
    <?php endforeach; ?>
</body>
</html>

<?php

// Functions related to Community Works

/**
 * Function to add a new article to the Community Works page.
 * @param string $title The title of the article
 * @param string $content The content of the article
 */
function addArticle($title, $content) {
    global $articles, $totalArticles;
    $articles[] = array(
        'title' => $title,
        'content' => $content,
    );
    // Incrementing the total number of articles
    $totalArticles++;
}

/**
 * Function to edit an existing article in the Community Works page.
 * @param int $index The index of the article to be edited
 * @param string $title The title of the article
 * @param string $content The content of the article
 */
function editArticle($index, $title, $content) {
    global $articles, $totalArticles;
    $articles[$index] = array(
        'title' => $title,
        'content' => $content,
    );
}

/**
 * Function to delete an existing article from the Community Works page.
 * @param int $index The index of the article to be deleted
 */
function deleteArticle($index) {
    global $articles, $totalArticles;
    unset($articles[$index]);
    // Decrementing the total number of articles
    $totalArticles--;
}

/**
 * Function to search an article from the Community Works page.
 * @param string $keyword The keyword to search
 */
function searchArticle($keyword) {
    global $articles;
    $result = array();
    foreach ($articles as $key => $article) {
        if (strpos(strtolower($article['title']), strtolower($keyword)) !== false ||
        strpos(strtolower($article['content']), strtolower($keyword)) !== false) {
            $result[] = $key;
        }
    }
    return $result;
}

// This is the end of the Community Works page
?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/CookBook-Recipe-Organizer-System/components/html/categories.php'; ?>
<div class="container">
    <div class="sidebar">
        <div>
            <div class="logo">
                <span class="white">Cook</span><span class="blue">Book</span>
            </div>
            <hr>
            <div class="menu">
                <p class="heading" jid="heading">Categories</p>
                <?php foreach($categories as $key => $label): ?>
                <button id="<?php echo $key; ?>"><?php echo $label; ?></button>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="s_footer">
            <hr>
            <div class="profile">
                <div class="icon"><i class="fa-solid fa-user"></i></div>
                <div>
                    <p class="name">Arpita Sharma</p>
                </div>
                <div class="home-btn">
                    <a href="/CookBook-Recipe-Organizer-System/index.php"><i class="fa-solid fa-arrow-left"></i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        window.cookbookCategories = [
            <?php foreach($categories as $key => $label):
                $first = substr($label, 0, 1);
                $rest = substr($label, 1);
            ?>
            {id: '<?php echo $key; ?>', first: '<?php echo $first; ?>', rest: '<?php echo $rest; ?>'},
            <?php endforeach; ?>
        ];
    </script>
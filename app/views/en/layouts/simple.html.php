<div id="page">
    <div id="header">
        <a href="/"><img src="/images/plumline.png" width="300" height="109" alt="Plumline" /></a>
        <div id="links">
            <ul>
                <li class="first"><a href="/sangha/history">Our history</a></li>
                <li><a href="/practice/mindfulness">Mindfulness practice</a></li>
                <li><a href="/practice/links">Useful links</a></li>
                <li><a href="/contact/form">Contact form</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
<?= indent(8, "<h3>$title</h3>") ?>
<?= $flash->notice ? indent(8, "<div id=\"flash\">$flash->notice</div>") : '' ?>
<?= indent(8, $content) ?>
    </div>
    <div id="footer">
        Copyright &copy; <?= strftime('%Y') ?> Plumline Sangha
    </div>
</div>

<html>
<h3>Plumline website message</h3>
<div><strong>Name</strong>: <?= $message->name ?></div>
<div><strong>Email(s)</strong>: <?= $message->email ?> <?= $message->email_other ?></div>
<div><strong>Meeting</strong>: <?= $message->meeting ?></div>
<div><strong>Country</strong>: <?= $message->country ?></div>
<div><strong>Timezone</strong>: <?= $message->timezone ?></div>
<p><?= nl2br($message->content) ?></p>
</html>

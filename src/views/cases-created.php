<h1>Case Submitted</h1>

<p>The following case data was received by the server:</p>

<nav>
    <a href="/">Home</a> |
    <a href="/cases">Cases</a> |
    <a href="/cases/new">New Case</a>
</nav>

<hr>

<p>
    <strong>Subject:</strong>
    <?= htmlspecialchars($submittedCase['subject']); ?>
</p>

<p>
    <strong>Description:</strong>
    <?= htmlspecialchars($submittedCase['description']); ?>
</p>

<p>
    <strong>Priority:</strong>
    <?= htmlspecialchars($submittedCase['priority']); ?>
</p>


<h1>Cases</h1>

<p>This page displays sample support cases.</p>

<nav>
    <a href="/">Home</a> |
    <a href="/cases">Cases</a>
</nav>

<hr>

<?php foreach ($cases as $case): ?>
    <article>
        <h2>
            Case #<?= $case['id']; ?>:
            <?= htmlspecialchars($case['subject']); ?>
        </h2>

        <p>
            <strong>Description:</strong>
            <?= htmlspecialchars($case['description']); ?>
        </p>

        <p>
            <strong>Status:</strong>
            <?= htmlspecialchars($case['status']); ?>
        </p>

        <p>
            <strong>Priority:</strong>
            <?= htmlspecialchars($case['priority']); ?>
        </p>

        <p>
            <strong>Created:</strong>
            <?= htmlspecialchars($case['created_at']); ?>
        </p>
    </article>

    <hr>
<?php endforeach; ?>



<h1>Create New Case</h1>

<p>Use this form to create a new support case.</p>

<nav>
    <a href="/">Home</a> |
    <a href="/cases">Cases</a> |
    <a href="/cases/new">New Case</a>
</nav>

<hr>

<?php if (! empty($errors)): ?>
    <section>
        <h2>Please fix the following errors:</h2>

        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <hr>
<?php endif; ?>

<form method="POST" action="/cases">
    <p>
        <label for="subject">Subject</label><br>
        <input
            type="text"
            id="subject"
            name="subject"
            value="<?= htmlspecialchars($submittedCase['subject'] ?? ''); ?>"
        >
    </p>

    <p>
        <label for="description">Description</label><br>
        <textarea id="description" name="description" rows="5" cols="40"><?= htmlspecialchars($submittedCase['description'] ?? ''); ?></textarea>
    </p>

    <p>
        <label for="priority">Priority</label><br>
        <select id="priority" name="priority">
            <option value="">Select priority</option>
            <option value="Low" <?= (($submittedCase['priority'] ?? '') === 'Low') ? 'selected' : ''; ?>>Low</option>
            <option value="Medium" <?= (($submittedCase['priority'] ?? '') === 'Medium') ? 'selected' : ''; ?>>Medium</option>
            <option value="High" <?= (($submittedCase['priority'] ?? '') === 'High') ? 'selected' : ''; ?>>High</option>
        </select>
    </p>

    <button type="submit">Create Case</button>
</form>


<h1>Create New Case</h1>

<p>Use this form to create a new support case.</p>

<nav>
    <a href="/">Home</a> |
    <a href="/cases">Cases</a> |
    <a href="/cases/new">New Case</a>
</nav>

<hr>

<form method="POST" action="/cases">
    <p>
        <label for="subject">Subject</label><br>
        <input type="text" id="subject" name="subject">
    </p>

    <p>
        <label for="description">Description</label><br>
        <textarea id="description" name="description" rows="5" cols="40"></textarea>
    </p>

    <p>
        <label for="priority">Priority</label><br>
        <select id="priority" name="priority">
            <option value="">Select priority</option>
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
        </select>
    </p>

    <button type="submit">Create Case</button>
</form>


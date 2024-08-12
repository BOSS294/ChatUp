<div class="side-inbox">
    <div class="side-inbox-header">
        <h2 class="inbox-heading">Inbox</h2> <!-- You can change "Inbox" to "Friends" if needed -->

        <span class="material-icons close-btn">close</span>
    </div>
    <ul class="user-list">
        <li>
            <img src="https://shubhamstenoedu.in/images/mayank.jpg" alt="User Profile" class="profile-pic">
            <div class="user-info">
                <span class="user-name">Mayank Chawdhari</span>
                <span class="user-status">Active Now</span>
            </div>
        </li>
        <li>
            <img src="https://shubhamstenoedu.in/images/mayank.jpg" alt="User Profile" class="profile-pic">
            <div class="user-info">
                <span class="user-name">Mayank Chawdhari</span>
                <span class="user-status">Active Now</span>
            </div>
        </li>
        <li>
            <img src="https://shubhamstenoedu.in/images/mayank.jpg" alt="User Profile" class="profile-pic">
            <div class="user-info">
                <span class="user-name">Mayank Chawdhari</span>
                <span class="user-status">Active Now</span>
            </div>
        </li>
        <li>
            <img src="https://shubhamstenoedu.in/images/mayank.jpg" alt="User Profile" class="profile-pic">
            <div class="user-info">
                <span class="user-name">Mayank Chawdhari</span>
                <span class="user-status">Active Now</span>
            </div>
        </li>
        <!-- Repeat similar <li> for more users -->
    </ul>
</div>
<button class="open-inbox-btn">Open Inbox</button>
<script>
    document.querySelector('.open-inbox-btn').addEventListener('click', function() {
    document.querySelector('.side-inbox').classList.add('open');
});

document.querySelector('.close-btn').addEventListener('click', function() {
    const inbox = document.querySelector('.side-inbox');
    inbox.classList.remove('open');
    inbox.style.animation = 'slideOut 0.5s forwards';
    setTimeout(() => {
        inbox.style.animation = 'slideIn 0.5s forwards';
    }, 500);
});

</script>
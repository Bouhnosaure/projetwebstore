<form action="#" method="post">
    <p><?= $data['error']; ?></p>
    <label for="user">Identification</label>
    <input type="text" name="user" id="user" required>
    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass" required>
    <input type="submit">    
</form>

<?= $data['user'] ?>
<?= $data['pass'] ?>
<?= $data['reqUserPass'] ?>
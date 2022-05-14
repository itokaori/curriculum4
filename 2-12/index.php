<form action="result.php" method="post">
    お名前：<input type="text" name="my_name"/>
    <br>
    ご希望商品：<input type="radio" name="prize" value="Ａ賞">Ａ賞
               <input type="radio" name="prize" value="Ｂ賞">Ｂ賞
               <input type="radio" name="prize" value="Ｃ賞">Ｃ賞
    <br>
    個数：
            <select name="quantity">
               <?php for($i=1; $i<11; $i++) { ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
               <?php } ?>
            </select>
    <br>
    <input type="submit" value="申込"/>
</form>

<div class="loginform">
    <h1>Verzend pakket</h1>
    <form action="../php/verzenden.php" method="post">
        <label for="afmeting">Afmeting:</label>
        <select name="afmeting" id="afmeting" required>
            <option value="Groot">Groot</option>
            <option value="Middelgroot">Middelgroot</option>
            <option value="Klein">Klein</option>
        </select>
        <input type="text" name="bedrijf" placeholder="bedrijf" required>
        <input type="date" name="datum" placeholder="datum" required>
        <input type="number" name="gewicht" placeholder="gewicht" min="0" max="30" required>
        <label for="verzekerd">Verzekerd:</label>
        <input type="checkbox" name="verzekerd" id="verzekerd" value=1>
        <label for="spoed">Spoed:</label>
        <input type="checkbox" name="spoed" id="spoed" value=1>
        <button type="submit">verzend</button>
        <script>
            var weightInput = document.querySelector("input[name='gewicht']");
            weightInput.addEventListener("keypress", function(e) {
                if (e.keyCode < 48 || e.keyCode > 57) {
                    e.preventDefault();
                }
                if (this.value > 30) {
                    this.value = 30;
                }
            });
        </script>
    </form>
</div>


<!-- File: app/Views/domains/create.php -->

<h2>Create Domain</h2>

<?= form_open('domains/store') ?>
    <label for="nama_domain">Nama Domain:</label>
    <input type="text" name="nama_domain" required>

    <label for="opd_id">OPD:</label>
    <select name="opd_id">
        <?php foreach ($opdOptions as $opd): ?>
            <option value="<?= $opd['id'] ?>"><?= $opd['nama_opd'] ?></option>
        <?php endforeach; ?>
    </select>
    <label for="deskripsi">Deskripsi:</label>
       <textarea name="deskripsi"></textarea>

       <label>Bahasa Pemrograman:</label>
       <?php foreach ($bahasaProgramOptions as $bahasaProgram): ?>
           <label>
               <input type="checkbox" name="bahasa_program[]" value="<?= $bahasaProgram['id'] ?>">
               <?= $bahasaProgram['nama_bahasa_program'] ?>
           </label>
       <?php endforeach; ?>

       <label for="jenis_database">Jenis Database:</label>
       <select name="jenis_database">
           <option value="MySQL">MySQL (default)</option>
           <option value="PostgreSQL">PostgreSQL</option>
           <option value="MongoDB">MongoDB</option>
       </select>

       <label for="versi_php">Versi PHP:</label>
       <select name="versi_php">
           <option value="5">Versi 5 (default)</option>
           <option value="7">Versi 7</option>
           <option value="8">Versi 8</option>
       </select>

       <label for="nama_framework">Nama Framework:</label>
       <input type="text" name="nama_framework">

       <label for="template_bootstrap">Template Bootstrap:</label>
       <select name="template_bootstrap">
           <option value="Ya">Ya (default)</option>
           <option value="Tidak">Tidak</option>
       </select>

       <button type="submit">Create</button>
   <?= form_close() ?>

    <!-- Other fields and checkboxes -->

    <button type="submit">

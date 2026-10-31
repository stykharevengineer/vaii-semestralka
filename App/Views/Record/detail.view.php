<?php
// Detail platne – prevzaté z html/detail.html (vygenerované pomocou AI)

/** @var \Framework\Support\LinkGenerator $link */
?>

<!-- Navigačná cesta -->
<nav class="breadcrumb" aria-label="Navigačná cesta">
    <a href="<?= $link->url('record.detail') ?>">Katalóg</a> › <a href="#">Rock</a> › <span>Abbey Road</span>
</nav>

<!-- Informácie o platni -->
<article class="record">
    <img src="<?= $link->asset('images/cover.svg') ?>" alt="Obal platne Abbey Road" class="record-cover">

    <div class="record-info">
        <h1>Abbey Road</h1>
        <a href="#" class="record-artist">The Beatles</a>

        <div class="tags">
            <a href="#" class="tag">Rock</a>
            <span class="tag">1969</span>
        </div>

        <p class="rating">
            <span class="stars">★★★★☆</span>
            <strong>4,3</strong>
            <span class="muted">(3 recenzie)</span>
        </p>

        <p>Abbey Road je jedenásty štúdiový album skupiny The Beatles, ktorý vyšiel v septembri 1969.
            Bol to posledný album, ktorý členovia kapely nahrali spoločne, a dodnes patrí medzi
            najpredávanejšie a najznámejšie platne v histórii rockovej hudby.</p>
        <p>Druhá strana platne obsahuje slávne „medley“ – sériu krátkych skladieb, ktoré plynulo
            prechádzajú jedna do druhej. Platňa je nahraná pri 33 otáčkach za minútu.</p>
    </div>
</article>

<!-- Recenzie -->
<section class="reviews">

    <form class="review-form card" action="#" method="post">
        <h2>Pridať recenziu</h2>

        <fieldset class="rating-input">
            <legend>Hodnotenie</legend>
            <label><input type="radio" name="rating" value="1"> 1 ★</label>
            <label><input type="radio" name="rating" value="2"> 2 ★</label>
            <label><input type="radio" name="rating" value="3"> 3 ★</label>
            <label><input type="radio" name="rating" value="4"> 4 ★</label>
            <label><input type="radio" name="rating" value="5"> 5 ★</label>
        </fieldset>

        <label for="review-text" class="form-label">Text recenzie</label>
        <textarea id="review-text" name="text" rows="5" maxlength="1000"
                  placeholder="Napíšte, čo si o platni myslíte…"></textarea>
        <p class="muted char-count">0 / 1000</p>

        <button type="submit" class="btn btn-primary">Odoslať recenziu</button>
    </form>

    <div class="review-list">
        <div class="review-list-head">
            <h2>Recenzie (3)</h2>
            <select aria-label="Zoradiť recenzie">
                <option>Zoradiť: najnovšie</option>
                <option>Zoradiť: najstaršie</option>
                <option>Zoradiť: najlepšie hodnotenie</option>
            </select>
        </div>

        <article class="review card">
            <header class="review-head">
                <div>
                    <strong>mr_mesko</strong>
                    <span class="muted">· 12. 10. 2026</span>
                    <span class="stars">★★★★★</span>
                </div>
                <div class="review-actions">
                    <button type="button" class="btn btn-small btn-outline">Upraviť</button>
                    <button type="button" class="btn btn-small btn-danger">Zmazať</button>
                </div>
            </header>
            <p>Absolútna klasika, ktorá by nemala chýbať v žiadnej zbierke. Zvuk z vinylu je teplý
                a plný, druhá strana je jednoducho dokonalá.</p>
        </article>

        <article class="review card">
            <header class="review-head">
                <div>
                    <strong>stykharev</strong>
                    <span class="muted">· 3. 10. 2026</span>
                    <span class="stars">★★★★☆</span>
                </div>
            </header>
            <p>Výborný album, aj keď niektoré skladby na prvej strane ma až tak nezaujali.
                Lisovanie je kvalitné, bez praskania.</p>
        </article>

        <article class="review card">
            <header class="review-head">
                <div>
                    <strong>lucia_novak</strong>
                    <span class="muted">· 28. 9. 2026</span>
                    <span class="stars">★★★★☆</span>
                </div>
            </header>
            <p>Kúpila som si ju ako prvú platňu do zbierky a neľutujem. Odporúčam!</p>
        </article>
    </div>

</section>

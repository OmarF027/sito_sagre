<?php include('header.php'); ?>

<!-- Home Section -->
<div id="home" class="section">
<h1 class="section-title" style="text-align: center; margin: 0; display: inline-block;">
    Bienvenue à <span class="highlight">Maremma Che Sagra</span>
</h1>
<p><b>Découvrez les traditions gastronomiques de la Maremma</b>, une terre de saveurs authentiques et de plats typiques. Restez informés des événements, des <i>spécialités locales</i> et de tout ce qui rend nos fêtes traditionnelles vraiment uniques.</p>
</div>

<?php include('eventi.php'); ?>
<?php include('contatti.php'); ?>

<style>
    .whatsapp-icon {
        position: fixed;
        bottom: 20px;
        right: 25px;
        background-color: #25D366;
        color: white;
        padding: 15px 18px;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        z-index: 1000;
        transition: all 0.3s ease;
        text-decoration: none;
        font-size: 28px;
        line-height: 1;
    }
    .whatsapp-icon:hover {
        transform: scale(1.1) rotate(15deg);
        background-color: #128C7E;
        box-shadow: 0 6px 12px rgba(0,0,0,0.4);
    }
    
    @media (max-width: 768px) {
        .whatsapp-icon {
            bottom: 15px;
            right: 15px;
            padding: 12px 15px;
            font-size: 24px;
        }
    }
</style>

<a href="https://wa.me/39123456789" class="whatsapp-icon" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-whatsapp"></i>
</a>

<?php include('cookie.php'); ?>
<?php include('footer.php'); ?>

<!-- Include the external JavaScript file -->
<script src="../js/script.js"></script>

<footer class="site-footer">
    <p>&copy; <?php echo date('Y'); ?> Dev Journey. All rights reserved.</p>
</footer>
<?php wp_footer(); ?>


<script>
    // Simple scroll animation
    const animatedElements = document.querySelectorAll('.animate-fade-in-up');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1
    });

    animatedElements.forEach(el => observer.observe(el));
</script>

</body>

</html>
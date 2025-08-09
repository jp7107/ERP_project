<?php include 'includes/header.php'; ?>
<!-- all other is  here -->
    <div class=" container  ">

        <div class="login-wrapper d-flex justify-content-center align-items-center min-vh-100 ">
            <div class="login-card p-4 mx-5" style="width: 100%; max-width: 450px; height: 100%; max-height: 450px;">
                <form action="login.php" method="POST">
                    <div class="text-center mb-3">
                        <img src="photos/skit_logo.png" width="100px" alt="College Logo" class="mb-2">
                        <h5 class="mb-0 fw-bold">ABC Institute of Technology</h5>
                        <small class="text-muted">Student ID Card</small>
                    </div>
                </form>
            </div>

            <div class="login-card p-4 shadow rounded-4 bg-white" style="width: 100%; max-width: 450px;">
                <h3 class="text-center mb-4 d-flex bg-light text-dark">Login (Smart ERP System)</h3>
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label text-dark">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required
                            placeholder="eg.B241234@skit.ac.in">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-dark">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required
                            placeholder="••••••••••">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <p class="text-center mt-3 mb-0 text-muted">Don't have an account? <a href="signnup.php">Sign Up</a>
                </p>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
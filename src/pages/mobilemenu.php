<div class="menu-wrap">
				<nav class="menu">
					<div class="icon-list">
						<a href="/beranda"><span class="material-icons-outlined fs-4 text-white">home</span><span>Beranda</span></a>
						<a href="/struktur-organisasi"><span class="material-icons-outlined fs-4 text-white">people</span><span>Profile</span></a>
						<a href="/layanan/pendataan"><span class="material-icons-outlined fs-4 text-white">rss_feed</span><span>Layanan</span></a>
						<a href="/informasi/berita"><span class="material-icons-outlined fs-4 text-white">info</span><span>Informasi</span></a>
						<a href="/organisasi-terdaftar/ormas"><span class="material-icons-outlined fs-4 text-white">groups</span><span>Organisasi Terdaftar</span></a>
						<a href="/forum-umum"><span class="material-icons-outlined fs-4 text-white">forum</span><span>Forum ORSOSPOL</span></a>
                        <a href="https://linktr.ee/ardhin"><span class="material-icons-outlined fs-4 font-center text-white">support_agent</span><span>Hubungi Kami</span></a>
                        <?php if ($idRole == '9asdkqhjwew') { ?>
                        <a href="/users"><span class="material-icons-outlined fs-4 font-center" style="color: white;">groups</span><span>Login</span></a>
                        <?php } ?>
                        <?php if ($idRole == null) { ?>
                        <a href="#"><span class="material-icons-outlined fs-4 font-center text-white">meeting_room</span><span>Login</span></a>
                        <?php } ?>
					</div>
				</nav>
				<button class="close-button" id="close-button">Close Menu</button>
			</div>
# 🍔 RestoQR - Online Menü ve Yönetim Sistemi

Restoranlar ve kafeler için geliştirdiğim, müşterilerin QR kod ile menüye ulaşıp ürünleri inceleyebildiği web tabanlı bir proje.

**Durum:** Projenin menü görüntüleme ve yönetim paneli kısımları aktiftir. Sepet ve sipariş sistemi sonraki aşamada eklenecektir.

## 🚀 Neler Yapılabiliyor?

### 👤 Müşteri Tarafı
* **Hızlı Menü:** QR kodu okutan müşteri anında menüye ulaşır.
* **Kategori Filtreleme:** Ürünler kategorilere göre (Burger, İçecek vb.) filtrelenir.
* **Arama:** Fiyat aralığı ve ürün adına göre arama yapılabilir.
* **Responsive:** Telefondan rahatça kullanılabilir.

### 🛠 Yönetici Paneli
* **Dashboard:** Toplam ürün ve kategori sayılarını görme.
* **Ürün Yönetimi:** Yeni ürün ekleme, fiyat güncelleme, resim yükleme ve pasife alma.
* **Kategori Yönetimi:** Menü kategorilerini düzenleme, silme ve sıralama.
* **QR Oluşturucu:** Masalar için özel QR kodları üretip indirme.
* **Ayarlar:** Restoran bilgilerini güncelleme.

## 💻 Teknolojiler
* **Backend:** PHP
* **Veritabanı:** MySQL
* **Frontend:** Bootstrap 5, HTML, CSS

## ⚙️ Kurulum Notları

1. Dosyaları sunucunuza (localhost/htdocs) atın.
2. `online-qr-menu` adında bir veritabanı oluşturup SQL dosyasını içe aktarın.
3. `core/connection.php` dosyasındaki veritabanı ayarlarını yapın.

## 📌 Yapılacaklar (Roadmap)
- [ ] Gelişmiş Ürün Arama Modülü.
- [ ] Admin paneli şifre değiştirme modülü.
- [ ] SEO uyumlu URL yapısı.

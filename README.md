# 🍔 Online Menü ve Yönetim Sistemi

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

## ⚙️ Kurulum

Proje **"Self-Install"** (Kendi kendini kuran) yapıdadır. Manuel SQL dosyası yüklemenize gerek yoktur.

1. Proje dosyalarını XAMPP kullanıyorsanız `C:\xampp\htdocs\qr-menu` klasörüne atın.
2. `core/connection.php` dosyasını açın ve veritabanı bilgilerinizi girin.
3. Tarayıcınızdan `http://localhost/online-qr-menu` adresine gidin.
4. Sistem veritabanı ve tabloları **otomatik olarak oluşturacaktır.**
5. Varsayılan Yönetici Bilgileri:
   - **E-Posta:** `admin@admin.com`
   - **Şifre:** `admin`

## 📌 Yapılacaklar
- [ ] **Kritik Güvenlik:** Kayıt olma (Register) sayfası dışarıya kapatılacak, sadece admin panelinden yönetici eklenebilecek.
- [ ] **Güvenlik:** Tüm sayfalarda SQL Injection ve XSS açıklarına karşı güvenlik filtrelemeleri yapılacak.
- [ ] Admin paneli şifre değiştirme ve profil güncelleme modülü.

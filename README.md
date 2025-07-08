# 🌟 Platform Pencari Kerja 🌟

![Job Seeker Platform Banner](https://via.placeholder.com/1200x300?text=Job+Seeker+Platform)
*Ganti URL gambar di atas dengan tautan ke banner atau logo proyek Anda.*

[cite_start]Platform ini adalah solusi inovatif untuk menjembatani kesenjangan antara pencari kerja dan pasar kerja di Indonesia[cite: 3, 5]. [cite_start]Dikembangkan untuk mengatasi tantangan pengangguran, terutama bagi lulusan baru dan mereka yang kehilangan pekerjaan [cite: 3, 4][cite_start], platform ini menyediakan pengalaman daring yang mulus bagi individu untuk menemukan peluang kerja yang sesuai tanpa perlu hadir secara fisik di lokasi perusahaan[cite: 5, 379]. [cite_start]Tujuan utamanya adalah memudahkan masyarakat menemukan pekerjaan dan melihat kapan serta di mana mereka dapat datang ke lokasi perusahaan[cite: 379].

---

## 🚀 Teknologi yang Digunakan

Proyek ini dibangun dengan pendekatan modern, memisahkan frontend dan backend untuk skalabilitas dan pemeliharaan yang lebih baik.

* [cite_start]**Frontend**: React/Vue/Angular/Blade atau sejenisnya [cite: 6]
* [cite_start]**Backend**: Laravel API atau sejenisnya [cite: 6]

---

## ✨ Fungsionalitas Utama

Platform ini menawarkan serangkaian fitur inti untuk memberdayakan pencari kerja dalam perjalanan mereka menemukan pekerjaan impian:

### 1. Autentikasi: Gerbang Awal ke Dunia Kerja 🚪

[cite_start]Masyarakat harus terlebih dahulu login menggunakan nomor KTP dan kata sandi mereka untuk dapat masuk ke sistem dan mengakses fitur-fitur platform[cite: 14, 19, 22]. [cite_start]Untuk keamanan data pengguna, sistem secara otomatis membuat token autentikasi berbasis HASH dari nomor KTP setelah login berhasil[cite: 20]. [cite_start]Tombol logout akan muncul setelah login, memungkinkan pengguna untuk keluar dari sistem[cite: 15].

#### 🌐 Komponen Frontend

* [cite_start]Judul `Job Seeker Platform` [cite: 11]
* [cite_start]Form isian `Nomor KTP` [cite: 9]
* [cite_start]Form isian `Kata Sandi` [cite: 10]
* [cite_start]Tombol `Login` [cite: 12]

#### ⚙️ Spesifikasi API Backend (A1)

| Fitur               | URL                                 | Metode | Params | Body                                        | Respons (Sukses)                                                                                                              | Respons (Gagal)                                                                       |
| :------------------ | :---------------------------------- | :----- | :----- | :------------------------------------------ | :---------------------------------------------------------------------------------------------------------------------------- | :------------------------------------------------------------------------------------ |
| **Login Masyarakat**| [cite_start]`[domain]/api/v1/auth/login` [cite: 26] | [cite_start]`POST` [cite: 27]  | -      | [cite_start]`id card number: "SomeText", password: "SomeText"` [cite: 29] | [cite_start]`200 OK` [cite: 33][cite_start], `{name, born_date, gender, address, token, regional{province, district}}` [cite: 34, 35, 36, 37, 38, 39, 40, 42, 43] | [cite_start]`401 Unauthorized` [cite: 46][cite_start], `"message": "ID Card Number or Password incorrect"` [cite: 47] |
| **Logout Masyarakat**| [cite_start]`[domain]/api/v1/auth/logout` [cite: 50] | [cite_start]`POST` [cite: 52]  | [cite_start]`token` [cite: 51] | -                                           | [cite_start]`200 OK` [cite: 59][cite_start], `"message": "Logout success"` [cite: 60]                                                                   | [cite_start]`401 Unauthorized` [cite: 62][cite_start], `"message": "Invalid token"` [cite: 63]                |

#### ✅ Persyaratan Fungsional

* [cite_start]Bisa login menggunakan ID dan Password yang benar[cite: 65].
* [cite_start]Menampilkan pesan login sukses dan setelah di klik OK akan membuka DASHBOARD[cite: 65].
* [cite_start]Jika ID atau password salah akan menampilkan pesan `ID atau Password salah`[cite: 65].
* [cite_start]Jika sudah login tidak bisa kembali ke halaman sebelumnya atau tidak bisa kembali membuka halaman login[cite: 65].

---

### 2. Validasi Data: Menjaga Keaslian Informasi 🛡️

Tidak semua orang dapat langsung melamar pekerjaan. [cite_start]Masyarakat harus terlebih dahulu memvalidasi data mereka untuk memastikan informasi yang diberikan benar[cite: 77]. [cite_start]Setiap masyarakat hanya diperbolehkan mengajukan satu kali permintaan validasi untuk menghindari penyalahgunaan sistem[cite: 79]. [cite_start]Mereka dapat melihat status validasi mereka dan, jika diperlukan, mengajukan permintaan validasi kepada petugas[cite: 78].

#### 📊 Komponen Frontend (Dashboard & Permintaan Validasi Data)

* **Dashboard:**
    * [cite_start]Judul `Job Seeker Platform` [cite: 67]
    * [cite_start]Nama user (misalnya `Marsito Kusowwati`) [cite: 75]
    * [cite_start]Opsi `Logout` [cite: 75]
    * [cite_start]Judul `Dashboard` [cite: 68]
    * [cite_start]Sidebar `My Data Validation` [cite: 69]
    * [cite_start]Bagian `Data Validation` [cite: 70]
    * [cite_start]Tombol `+ Request validation` [cite: 71]
    * [cite_start]Judul `My Job Applications` [cite: 72]
    * [cite_start]Pesan peringatan jika validasi belum disetujui: `Your validation must be approved by validator to get the vaccine.` [cite: 73]
    * [cite_start]Tampilan status `data validation progress` (e.g., `pending`, `accepted`, `rejected`) [cite: 140, 105, 113]
    * [cite_start]`Job Category`, `Job Position`, `Reason Accepted`, `Validator`, dan `Validator Notes` untuk hasil validasi data [cite: 106, 107, 108, 109, 110, 114, 115, 116, 117, 118]
    * [cite_start]Tombol `+ Add Job Applications` [cite: 126]
    * [cite_start]Menampilkan progress pengajuan lamaran ke perusahaan[cite: 140].

* **Halaman Request Data Validation:**
    * [cite_start]Judul `Request Data Validation` [cite: 82]
    * [cite_start]Dropdown `Job Category` dengan select option (e.g., `Computing and ICT`) [cite: 83, 84]
    * [cite_start]Dropdown `Work Experiences?` dengan select option (e.g., `Yes I have`) [cite: 89, 90]
    * [cite_start]Textarea `Job position separate with, (comma)` [cite: 85]
    * [cite_start]Textarea `Describe your work experiences` [cite: 91]
    * [cite_start]Textarea `Reason Accepted` / `Explain why you should be accepted` [cite: 86, 87]
    * [cite_start]Tombol `Send Request` [cite: 88]

#### ⚙️ Spesifikasi API Backend (A2)

| Fitur                       | URL                               | Metode | Params | Body                                                                                              | Respons (Sukses)                                          | Respons (Gagal)                       |
| :-------------------------- | :-------------------------------- | :----- | :----- | :------------------------------------------------------------------------------------------------ | :-------------------------------------------------------- | :------------------------------------ |
| **Request Data Validations**| [cite_start]`[domain]/api/v1/validation` [cite: 150] | [cite_start]`POST` [cite: 152] | [cite_start]`token` [cite: 151] | [cite_start]`work experience: "SomeText", job category: "JobCategoryID", job position: "SomeText", reason accepted: "SomeText"` [cite: 154] | [cite_start]`200 OK` [cite: 159][cite_start], `"message": "Request data validation sent successful"` [cite: 160] | [cite_start]`401 Unauthorized` [cite: 162][cite_start], `"message": "Unauthorized user"` [cite: 163] |
| **Get Society Data Validation**| [cite_start]`[domain]/api/v1/validations` [cite: 166] | [cite_start]`GET` [cite: 168]  | [cite_start]`token` [cite: 167] | -                                                                                                 | [cite_start]`200 OK` [cite: 174][cite_start], `{validation{id, status, work_experience, job_category_id, job_position, reason_accepted, validator_notes, validator}}` [cite: 176, 177, 178, 179, 180, 181, 182, 183, 184] | [cite_start]`401 Unauthorized` [cite: 188][cite_start], `"message": "Unauthorized user"` [cite: 189] |

#### ✅ Persyaratan Fungsional

* [cite_start]Bisa melakukan validasi data untuk authorized user[cite: 191].
* [cite_start]Jika bukan authorized user akan muncul pesan `unauthorized user`[cite: 191].
* [cite_start]Jika ada textarea yang kosong saat validasi maka akan muncul pesan `data ada yang kosong`[cite: 191].
* [cite_start]Menampilkan progress pengajuan lamaran[cite: 191].
* [cite_start]Menampilkan hasil lamaran[cite: 191].

---

### 3. Menjelajahi Lowongan Pekerjaan 🔍

[cite_start]Setelah data masyarakat divalidasi, mereka dapat mulai mencari pekerjaan[cite: 209]. [cite_start]Sistem memungkinkan pengguna untuk memilih kategori pekerjaan yang sesuai dengan data mereka[cite: 209]. [cite_start]Semua lowongan pekerjaan yang tersedia di berbagai perusahaan akan ditampilkan, lengkap dengan detail seperti posisi yang tersedia dan jumlah pelamar yang telah mendaftar untuk posisi tersebut[cite: 210].

#### 🖥️ Komponen Frontend

* [cite_start]Judul halaman `Job Vacancies` [cite: 194]
* [cite_start]Judul `List of Job Vacancies` [cite: 195]
* [cite_start]`Nama Perusahaan` (e.g., `PT. Maju Mundur Sejahtera`) [cite: 198, 201, 204]
* [cite_start]`Alamat Perusahaan` (e.g., `Dr. Abdullah No. 31, DKI Jakarta`) [cite: 198, 204]
* [cite_start]`Available Position (Capacity)` (e.g., `Desain Grafis (3), Programmer (1), Manager (7)`) [cite: 199, 202, 205, 207]
* [cite_start]Bidang lowongan dan jumlahnya (e.g., `Desain Grafis (1)`) [cite: 211]
* [cite_start]Tombol `Detail / Apply` [cite: 200, 206]
* [cite_start]Tombol `Vacancies have been...` (untuk lowongan yang sudah dilamar) [cite: 203]

#### ⚙️ Spesifikasi API Backend (A3)

| Fitur                                   | URL                                   | Metode | Params | Body | Respons (Sukses)                                                                                                                                                                                                                                                                                                                                                                  | Respons (Gagal)                       |
| :-------------------------------------- | :------------------------------------ | :----- | :----- | :--- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | :------------------------------------ |
| **Get all job vacancy by chosen job category**| [cite_start]`[domain]/api/v1/job_vacancies` [cite: 217] | [cite_start]`GET` [cite: 219]  | [cite_start]`token` [cite: 218] | -    | [cite_start]`200 OK` [cite: 225][cite_start], `{vacancies[{id, category{id, job category}, Company{id, name, address, description}, available_position[{position, capacity, apply_capacity}]}]}` [cite: 227, 229, 230, 232, 233, 231, 234, 235, 236, 238, 240, 241]                                                                                                                               | [cite_start]`401 Unauthorized` [cite: 244][cite_start], `"message": "Unauthorized user"` [cite: 246] |
| **Get job vacancy detail by vacancy ID and date**| [cite_start]`/api/v1/job_vacancies/<id>` [cite: 249]| [cite_start]`GET` [cite: 251]  | [cite_start]`token, id` [cite: 250]| -    | [cite_start]`200 OK` [cite: 257][cite_start], `{id, vacancy{category{id, job_category}, company, address, description}, available_position[{position, capacity, apply_capacity, apply_count}]}` [cite: 259, 260, 261, 262, 263, 265, 266, 267, 270, 271, 272, 273] | [cite_start]`401 Unauthorized` [cite: 277][cite_start], `"message": "Unauthorized user"` [cite: 279] |

#### ✅ Persyaratan Fungsional

* [cite_start]Bisa menampilkan semua lowongan dari database[cite: 280].
* [cite_start]Bisa menampilkan lowongan yang sudah di lamar (`vacancies has been..`)[cite: 280].
* [cite_start]Bisa menampilkan bidang lowongan dan jumlahnya[cite: 280].

---

### 4. Melamar Pekerjaan: Kesempatan Sekali Seumur Hidup ✉️

[cite_start]Ketika menemukan pekerjaan yang sesuai, masyarakat dapat melamar pekerjaan hanya satu kali untuk setiap lowongan[cite: 306]. [cite_start]Mereka harus memasukkan ID lowongan dan posisi yang ingin mereka lamar[cite: 307]. [cite_start]Jika ada lebih dari satu posisi yang tersedia dan belum mencapai batas maksimum pelamar, mereka dapat memilih lebih dari satu posisi[cite: 308].

#### 📝 Komponen Frontend

* [cite_start]Judul `nama perusahaan` (e.g., `PT. Maju Mundur Sejahtera`) [cite: 287]
* [cite_start]`Alamat perusahaan` (e.g., `Jin. HOS Cokroaminoto (Pasirkaliki) No. 900, DKI Jakarta`) [cite: 288]
* [cite_start]Bagian `Description` [cite: 284]
* [cite_start]`Some description of job vacancy` [cite: 284]
* [cite_start]Bagian `Select position` [cite: 285]
* [cite_start]Tabel dengan kolom `Position`, `Capacity`, `Application / Max` [cite: 286, 291, 292]
* [cite_start]Bidang lowongan (e.g., `Desain Grafis`, `Programmer`, `Manager`) [cite: 297, 299, 300]
* [cite_start]Jumlah `capacity` (e.g., `3`, `1`, `1`) [cite: 298, 295, 303]
* [cite_start]Jumlah `application / max` (e.g., `6/12`, `3/8`, `22/22`) [cite: 293, 296, 304]
* [cite_start]`Notes for Company` [cite: 301]
* [cite_start]Textarea `Explain why you should be accepted` [cite: 302]
* [cite_start]Tombol `Apply for this job` [cite: 294]

#### ⚙️ Spesifikasi API Backend (A4)

| Fitur                               | URL                               | Metode | Params | Body                                        | Respons (Sukses)                                   | Respons (Gagal)                                                                                                                                         |
| :---------------------------------- | :-------------------------------- | :----- | :----- | :------------------------------------------ | :------------------------------------------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Applying for jobs** | [cite_start]`/api/v1/applications` [cite: 315]| [cite_start]`POST` [cite: 317] | [cite_start]`token` [cite: 316] | [cite_start]`vacancy id: 1, positions: [position 1, ...], notes: "SomeText"` [cite: 321, 322] | [cite_start]`200 OK` [cite: 324][cite_start], `"message": "Applying for job successful"` [cite: 325] | [cite_start]`401 Unauthorized` [cite: 327][cite_start], `"message": "Unauthorized user"` [cite: 328][cite_start]<br>`401 Unauthorized` [cite: 330][cite_start], `"message": "Your data validator must be accepted by validator before"` [cite: 331][cite_start]<br>`401 Unauthorized` [cite: 333][cite_start], `"message": "Invalid field", errors:{vacancy id, positions}` [cite: 335, 336, 337, 339, 340, 342][cite_start]<br>`401 Unauthorized` [cite: 346][cite_start], `"message": "Application for a job can only be once"` [cite: 347] |
| **Get all of society job applications**| [cite_start]`[domain]/api/v1/applications` [cite: 350] | [cite_start]`GET` [cite: 352]  | [cite_start]`token` [cite: 351] | -                                           | [cite_start]`200 OK` [cite: 356][cite_start], `{vacancies[{id, category{id, job category}, company, address, position[{position, apply_status, notes}]}]}` [cite: 358, 359, 360, 361, 362, 363, 364, 365, 371, 372, 373] | [cite_start]`401 Unauthorized` [cite: 367][cite_start], `"message": "Unauthorized user"` [cite: 368] |

#### ✅ Persyaratan Fungsional

* [cite_start]Bisa menampilkan nama perusahaan dari database[cite: 380].
* [cite_start]Bisa menampilkan alamat perusahaan dari database[cite: 380].
* [cite_start]Bisa menampilkan bidang lowongan[cite: 380].
* [cite_start]Bisa menampilkan jumlah posisi[cite: 380].
* [cite_start]Bisa menampilkan jumlah posisi dan posisi yang sudah dilamar ($6/12$)[cite: 380].
* [cite_start]Button bisa digunakan melamar pekerjaan[cite: 380].
* [cite_start]Bisa validasi jika textarea kosong[cite: 380].
* [cite_start]Bisa validasi satu posisi hanya bisa dilamar satu kali[cite: 380].

---

## 🏗️ ERD (Entity-Relationship Diagram)

Diagram ERD di bawah ini dapat digunakan dan ditingkatkan untuk desain basis data Anda. Diagram ini mencakup berbagai tabel yang mencerminkan struktur data platform.

```mermaid
erDiagram
    societies ||--o{ job_apply_societies : "has"
    societies ||--o{ validations : "requests"
    societies ||--o{ job_apply_positions : "applies_for"
    regionals ||--o{ societies : "located_in"
    job_categories ||--o{ validations : "belongs_to"
    job_categories ||--o{ job_vacancies : "has"
    validators ||--o{ validations : "validates"
    users ||--o{ validators : "is_user"
    job_vacancies ||--o{ job_apply_societies : "has"
    job_vacancies ||--o{ available_positions : "has"
    job_apply_societies ||--o{ job_apply_positions : "has"

    societies {
        bigint id PK "bigint(20) unsigned"
        char id_card_number "char(8)"
        varchar password "varchar(255)"
        varchar name "varchar(255)"
        date born_date "date"
        enum gender "enum('male', 'female')"
        text address "text"
        bigint regional_id FK "bigint(20) unsigned"
        text login_tokens "text"
    }

    job_apply_societies {
        bigint id PK "bigint(20) unsigned"
        text notes "text"
        date date "date"
        bigint society_id FK "bigint(20) unsigned"
        bigint job_vacancy_id FK "bigint(20) unsigned"
    }

    job_categories {
        bigint id PK "bigint(20) unsigned"
        varchar job_category "varchar(255)"
    }

    validations {
        bigint id PK "bigint(20) unsigned"
        bigint job_category_id FK "bigint(20) unsigned"
        bigint society_id FK "bigint(20) unsigned"
        bigint validator_id FK "bigint(20) unsigned"
        enum status "enum('accepted', 'declined', 'pending')"
        text work_experience "text"
        text job_position "text"
        text reason_accepted "text"
        text validator_notes "text"
    }

    regionals {
        bigint id PK "bigint(20) unsigned"
        varchar province "varchar(255)"
        varchar district "varchar(255)"
    }

    validators {
        bigint id PK "bigint(20) unsigned"
        bigint user_id FK "bigint(20) unsigned"
        enum role "enum('officer', 'validator')"
        varchar name "varchar(255)"
    }

    users {
        bigint id PK "bigint(20) unsigned"
        varchar username "varchar(255)"
        varchar password "varchar(255)"
    }

    job_apply_positions {
        bigint id PK "bigint(20) unsigned"
        date date "date"
        bigint society_id FK "bigint(20) unsigned"
        bigint job_vacancy_id FK "bigint(20) unsigned"
        bigint position_id FK "bigint(20) unsigned"
        bigint job_apply_societies_id FK "bigint(20) unsigned"
        enum status "enum('pending', 'accepted', 'rejected')"
    }

    available_positions {
        bigint id PK "bigint(20) unsigned"
        bigint job_vacancy_id FK "bigint(20) unsigned"
        varchar position "varchar(255)"
        bigint capacity "bigint(20)"
        bigint apply_capacity "bigint(20)"
    }

    job_vacancies {
        bigint id PK "bigint(20) unsigned"
        bigint job_category_id FK "bigint(20) unsigned"
        varchar company "varchar(255)"
        text address "text"
        text description "text"
    }
# 🏠 Homewise MVP

Homewise is an MVP web app that helps homeowners **plan repairs, track maintenance, and avoid costly surprises**.  
Built with **Laravel 10, SQLite, and Vue 3**, it combines repair cost ranges, seasonal maintenance reminders, and GIS personalization (address → zone, climate, regional costs).  

---

## 🚀 Features

- 🔑 **Authentication** (Laravel Breeze – Blade)  
- 🏚️ **Home Profile** – enter your address, year built, home type  
- 📍 **GIS Enrichment** – geocode address → lat/long, region, plant zone, flood zone  
- 💵 **Repair Cost Estimates** – DIY vs. Pro cost ranges with regional multipliers  
- 📅 **Maintenance Checklists** – seasonal tasks generated automatically  
- 📊 **Dashboard** – view upcoming tasks, repairs, and estimated yearly spend  
- 📄 **PDF Export** – generate a printable "My Home Plan"  

---

## 🛠️ Tech Stack

- **Backend:** Laravel 10, PHP 8+, SQLite (for MVP)  
- **Frontend:** Blade + Vue 3 (mounted via Vite)  
- **Styling:** Bootstrap 5 + Bootstrap Icons  
- **APIs:**  
  - Google Maps Geocoding (address → lat/long)  
  - USDA Plant Hardiness Zones  
  - FEMA Flood Map (optional)  

---
## 🧪 Demo Flow
Register/Login (auth powered by Laravel Breeze – Blade).
Onboard → enter address, year built, home type, DIY level.
Dashboard → view tasks, repairs, and costs personalized to your home.
Add to Plan → track repairs & seasonal tasks.
Export PDF → download "My Home Plan".

##🗂️ Example Seed Data

Repairs
Roof Leak Repair → $450 – $800 (Pro recommended)
Water Heater Replacement → $1,200 – $2,500 (Pro required)
Faucet Replacement → $80 – $150 (DIY friendly)

Maintenance Tasks
Clean Gutters (Spring/Fall)
Replace HVAC Filter (Monthly/Quarterly)
Test Smoke Detectors (Quarterly)
Service Furnace (Fall)



## 📌 Эндпоинты API

Все запросы требуют ключ `key` в строке запроса.  
Пример: `GET /api/sales?key=YOUR_KEY`

---

### ✅ /api/sales
**Фильтры:**
- `dateFrom` (обязательный) — формат `Y-m-d`
- `dateTo` (обязательный) — формат `Y-m-d`
- `page` — номер страницы (по умолчанию 1)
- `limit` — максимум 500 (по умолчанию 500)

---

### ✅ /api/orders  
**Фильтры:**  
Такие же, как у `/sales`

---

### ✅ /api/incomes  
**Фильтры:**  
Такие же, как у `/sales`

---

### ✅ /api/stocks  
**Фильтры:**
- `dateFrom` (обязательный) — формат `Y-m-d`
- `page` и `limit` — работают так же, как у остальных

---

### ⚠ Ограничения:
- Максимум `500` записей за запрос
- Формат даты: `Y-m-d` (только дата)
- Все данные возвращаются с пагинацией

---

### 🧩 Архитектура:
- Вся бизнес-логика вынесена из контроллеров в отдельный **сервисный слой** (`ManualService`) для лучшей читаемости и повторного использования.

---
## 🗃 DB Host
turntable.proxy.rlwy.net:10298
## 🗃 DB Port
3306
## 🗃 DB DATABASE
railway
## 🗃 DB USERNAME
root
## 🗃 DB PASSWORD
NPtNBlvFGUPMLQJppsKRGYAMYoMDljdt
## 🗃 Структура БД

### Таблица `sales`
- `id`
- `product_name`
- `quantity`
- `price_per_unit`
- `date`
- `total`
- 
### Таблица `orders`
- `id`
- `customer_name`
- `order_number`
- `total_amount`
- `status` (`enum`: 'pending', 'processing', 'completed', 'cancelled')
- `date`

### Таблица `stocks`
- `id`
- `product_name`
- `quantity`
- `location`
- `date`

### Таблица `incomes`
- `id`
- `source`
- `amount`
- `date`
- `description`

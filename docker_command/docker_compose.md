# 1️⃣ 建構所有容器（image）
docker compose -f docker-compose.yml build

# 2️⃣ 啟動所有容器 背景執行
docker compose -f docker-compose.yml up -d

# 3️⃣ 查看運作狀態
docker compose ps

# 4️⃣ 檢查 log
docker compose logs -f

# 5️⃣ 若修改了 Dockerfile 或程式碼，要重新 build
docker compose -f docker-compose.yml up -d --build

# 6️⃣ 停止所有服務
docker compose down

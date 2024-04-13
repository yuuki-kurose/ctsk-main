<!-- タスク登録ページ -->
<div class="task__register">
  <form class="task__register-form">
    <!-- タスク名と詳細のブロック -->
    <div class="task__register-group detail">
      <div class="task__register-content">
        <label for="task-name">
          作業名：
          <input  type="text"
                  name="task-name"
                  value=""
                  placeholder="作業名を入力してください"
                  class="task__register-name"
          />
        </label>
      </div>
      <div class="detail__content">
        <label for="task-detail">
          作業内容：
          <textarea
                  name="task-detail"
                  value=""
                  placeholder="作業の詳細を入力してください"
                  class="detail__content-textarea"
          ></textarea>
        </label>
      </div>
    </div>
    <!-- ステータス・担当者・開始日/期限のブロック -->
    <div class="task__register-detail detail-content">
      <!-- 2つのブロックを用意 -->
      <div class="task__register-category">
        <!-- ステータス・開始日のブロック -->
        <div class="task__register-status status">
          <label for="status">
            ステータス：
            <select name="ステータス">
              <option value="">選択してください</option>
              <option value="untreated">未処理</option>
              <option value="process">処理中</option>
              <option value="processed">処理済</option>
              <option value="completion">完了</option>
            </select>
          </label>
        </div>
        <div class="task__register-day day">
          <label for="day">
            開始日：
            <input  type="calender"
                    name="day"
                    value=""
                    placeholder=""
            />
          </label>
        </div>
      </div>
      <!-- 2つのブロックを用意 -->
      <div class="task__register-category">
        <!-- 担当者・期日のブロック -->
        <div class="task__register-person person">
          <label for="person">
            担当者：
            <input  type="text"
                    name="person"
                    value=""
                    placeholder=""
            />
          </label>
        </div>
        <div class="task__register-endday endday">
          <label for="endday">
            期日：
            <input  type="calender"
                    name="endday"
                    value=""
            />
          </label>
        </div>
      </div>
    </div>
    <!-- 保存・キャンセルのブロック -->
    <div class="task__register-btn btn">
      <!-- 保存のブロック -->
      <div class="btn__save">
        <input  type="button"
                name="save"
                value="保存"
                submit
        />
      </div>
      <!-- キャンセルのブロック -->
      <div class="btn__cancel">
        <input  type="button"
                name="cancel"
                value="キャンセル"
        />
      </div>
    </div>
  </form>
</div>


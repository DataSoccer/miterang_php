input_id = input("아이디를 입력해주세요.\n")
members = ['jinsun_k', 'kookbal', 'milk_k']
for k in members:
    if k == input_id:
        print("you are a member : " +k)
        import sys
        sys.exit()
print('Who are you?')

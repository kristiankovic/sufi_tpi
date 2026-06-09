mkdir -p ~/.zsh
echo -e "\e[31mCarpeta creada...\e[0m"

git clone https://github.com/zsh-users/zsh-autosuggestions ~/.zsh/zsh-autosuggestions
git clone https://github.com/zsh-users/zsh-syntax-highlighting.git ~/.zsh/zsh-syntax-highlighting
echo -e "\e[32mSe clonaron los repositorios...\e[0m"

source ~/.zshrc

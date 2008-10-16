<?php
	class QQN {
		static public function NarroContext() {
			return new QQNodeNarroContext('narro_context', null);
		}
		static public function NarroContextComment() {
			return new QQNodeNarroContextComment('narro_context_comment', null);
		}
		static public function NarroContextInfo() {
			return new QQNodeNarroContextInfo('narro_context_info', null);
		}
		static public function NarroFile() {
			return new QQNodeNarroFile('narro_file', null);
		}
		static public function NarroFileHeader() {
			return new QQNodeNarroFileHeader('narro_file_header', null);
		}
		static public function NarroLanguage() {
			return new QQNodeNarroLanguage('narro_language', null);
		}
		static public function NarroPermission() {
			return new QQNodeNarroPermission('narro_permission', null);
		}
		static public function NarroProject() {
			return new QQNodeNarroProject('narro_project', null);
		}
		static public function NarroSuggestion() {
			return new QQNodeNarroSuggestion('narro_suggestion', null);
		}
		static public function NarroSuggestionComment() {
			return new QQNodeNarroSuggestionComment('narro_suggestion_comment', null);
		}
		static public function NarroSuggestionVote() {
			return new QQNodeNarroSuggestionVote('narro_suggestion_vote', null);
		}
		static public function NarroText() {
			return new QQNodeNarroText('narro_text', null);
		}
		static public function NarroTextComment() {
			return new QQNodeNarroTextComment('narro_text_comment', null);
		}
		static public function NarroUser() {
			return new QQNodeNarroUser('narro_user', null);
		}
		static public function NarroUserPermission() {
			return new QQNodeNarroUserPermission('narro_user_permission', null);
		}
	}
?>